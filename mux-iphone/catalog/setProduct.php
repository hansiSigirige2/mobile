<?php
    if(!isset($_SESSION)) { session_start(); }
    if (isset($_POST['currentProduct'])){
        $_SESSION['currentProduct'] = $_POST['currentProduct'];
    }
?>