<?php
include '../templates/header.php';
session_start();
?>

<div role="main" class="ui-grid-solo main-section" style="background: #000000 !important;">
		<div class="container"
			 style="
			 max-width: 100vw !important;
			 padding-top: 1rem;
			 position: absolute;
			 z-index: 5;
			 background: rgba(0, 0, 0, 0.5);">
			<h1 class="qr-header">QR Scan</h1>
		</div>
		<div class="qr-btn-block">
			<button id="scan-qr" class="qr-btn" onclick="scanQr()"></button>
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
	<script type="text/javascript" src="node_modules/qrcode-reader/dist/index.js"></script>
	<!-- Custom Scripts -->
	<script src="../assets/scripts/main.js"></script>
	<script src="../assets/scripts/qr_scan.js"></script>