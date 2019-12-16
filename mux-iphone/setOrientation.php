<?php

if(!isset($_SESSION)) { session_start(); }
if (isset($_POST['orientation'])){
	$_SESSION['orientation'] = $_POST['orientation'];
}





