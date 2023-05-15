<?php
 include_once '../header.php';
 require_once 'dbh.inc.php';
 require_once 'functions.inc.php';

//$neki = $_SESSION['idk'];
$idnarocila = $_GET["neki"];
$userid = $_SESSION["userid"];

sprejmiNarocilo($connection, $idnarocila, $userid);