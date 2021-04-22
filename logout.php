<?php
session_start();
include_once "autoload.php";
$histo = new HistoriqueRepository();
unset($_SESSION['is_connected']);
$histo->ajout(" logged out ",date("Y/m/d H:i"),"Admin");
header('location:login.php');
