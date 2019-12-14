<?php
include '../templates/header.php';
session_start();
?>

<div role="main" class="ui-grid-solo main-section" style="background: #000000 !important;">
	<div class="qr-btn-block">
		<button id="scan-qr" class="qr-btn" onclick="scanQr()">text</button>
	</div>
	<video class="qr-viewport" id="preview" style="height: 100vh;" autoplay></video>
	<canvas class="hide"></canvas>
</div>


<!-- jQuery Scripts -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- Bootstrap Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
<!-- QR library -->
<script type="text/javascript" src="../node_modules/qrcode-reader/dist/index.js"></script>
<!-- Custom Scripts -->
<script src="../assets/scripts/main.js"></script>
<script src="../assets/scripts/qr_scan.js"></script>



<!-- QR Good Result Modal -->
<!-- <div class="modal fade share-modal" data-role="dialog" id="qr-good-result-modal" tabindex="-1" role="dialog"
	aria-labelledby="qr-good-result-modal-title" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content share-modal-content">
			<div class="modal-body text-center">
				YES
			</div>
		</div>
	</div>
</div> -->

<!-- QR Bad Result Modal -->
<!-- <div class="modal fade share-modal" data-role="dialog" id="qr-bad-result-modal" tabindex="-1" role="dialog"
	aria-labelledby="qr-bad-result-modal-title" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content share-modal-content">
			<div class="modal-body text-center">
				NO
			</div>
		</div>
	</div>
</div> -->