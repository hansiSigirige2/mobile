<?php
include '../templates/header.php';
session_start();
?>

<div role="main" class="ui-grid-solo main-section" style="background: #000000 !important;">
	<div class="qr-btn-block">
		<button id="scan-qr" class="qr-btn" onclick="scanQr()">SCAN QR CODE</button>
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
<link rel="stylesheet" href="qr.css">


<!-- Modal -->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog model-box" role="document">
    <div class="modal-content">
      <div class="modal-header no-border">
        <h5 class="modal-title message-header-s" id="exampleModalLabel">Scan Successful!</h5>
       
          
      
      </div>
      <div class="modal-footer no-border">
	  <button type="button" class="btn btn-primary">Proceed</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="fail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog model-box" role="document">
    <div class="modal-content">
      <div class="modal-header no-border">
        <h5 class="modal-title message-header" id="exampleModalLabel">Scan Failed!</h5>
        
        
      </div>
      <div class="modal-footer no-border">
	  <button type="button" class="btn btn-primary"data-dismiss="modal">Try Again</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       
      </div>
    </div>
  </div>
</div>