<?php

if(!isset($_SESSION)) { session_start(); }
if (isset($_POST['categoryname'])){
    $_SESSION['categoryname'] = $_POST['categoryname'];
}