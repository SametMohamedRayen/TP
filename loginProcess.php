<?php
session_start();
include_once ("Classes/BDConnect.php");
include_once "autoload.php";
if(!isset($_COOKIE['history']))
{
    setcookie("history","",time()+60*60*24*365,"uploads");
}

$login = $_POST['email'];
$pwd = $_POST['password'];

if((!isset($login)) || (!isset($pwd)) || $login =="" || $pwd =="")
{
    $_SESSION['login_error'] = "Vous n'avez pas le droit de mettre des champs vides !!";
    header("location:login.php");
    exit();
}

$userRepo = new UserRepository();

if($userRepo->verifAdmin($login,$pwd))
{
    $_SESSION['is_connected'] = true;
    unset($_SESSION['login_error']);
    $_COOKIE['history'] +=(["User _anonymous_ logged in at ".date("Y/m/d H:i")."."]);
    header("location:home.php");
}
else
{
    $_SESSION['login_error'] = "Veuillez vérifer vos credentials !!";
    header("location:login.php");
}


