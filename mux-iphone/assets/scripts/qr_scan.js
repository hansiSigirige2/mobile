// Verify support for camera functionality and initialise camera
let qr = new QrCode();

function getUserMediaExists() {
	return !!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia);
}

function initializeViewport() {
	if (getUserMediaExists()) {
		const constraints = {
			video: {
				width: {
					ideal: window.width
				},
				height: {
					ideal: window.height
				},
				facingMode: {
					ideal: 'environment'
				}
			}
		};

		const video = document.getElementById('preview');

		navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
				video.srcObject = stream;
			},
			(err) => {
				$('#qr-bad-result').html('Please allow your device to use the camera for QR Scanning.');
				$('#qr-bad-result-modal').modal('show');
			});
	} else {
		$('#qr-bad-result').html('The QR Scanner is incompatible with your browser.');
		$('#qr-bad-result-modal').modal('show');
	}
}

function scanQr() {
	const video = document.getElementById('preview');
	const canvas = document.querySelector('canvas');

	canvas.width = video.videoWidth;
	canvas.height = video.videoHeight;
	canvas.getContext('2d').drawImage(video, 0, 0);
	let data = canvas.getContext('2d').getImageData(0, 0, canvas.width, canvas.height);
	interpretQr(data);
}

function interpretQr(data) {
	qr.callback = function (err, val) {
		if (err) {
			
			$('#fail').modal('show');
			
		}
		if (val) {
			addLoyalty();
			$('#success').modal('show');
			
			
		}
	};
	qr.decode(data);
}

function navigateToGamePage() {
	let ajaxUrl = './update_raffle.php';
	let data =  {'data': 'clicked'};
	$.post(ajaxUrl, data, function (response) {
		window.location.href = './game.php';
	});
}

$(function () {
	initializeViewport();
});

function addLoyalty(){
    $.ajax({
        url: '../setLoyalty.php',
        method: 'POST',
        data: { "loyalty_points": true },
        success: function(response) {
        }
    });
}