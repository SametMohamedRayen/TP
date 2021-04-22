<?php
session_start();
include_once "autoload.php";


$nom =$_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$section = $_POST['section'];
$cin = $_POST['cin'];
$path = 'uploads/';

if((isset($_FILES['photo']) && ($_FILES['photo']) != "") && ($_FILES['photo']['name']!="")){
        $path = $path.uniqid().$_FILES['photo']['name'];
        copy($_FILES['photo']['tmp_name'], $path);
        $personne = new PersonneRepository();
        $personne->ajoutPersonne($nom,$prenom,$section,$age,$cin,$path);
        unset($_SESSION["bdError"]);
        $_COOKIE['history'] += (["Personne ".$nom." ".$prenom." est ajouté at ".date("Y/m/d H:i")."."]);
        header("location:home.php");
}
else{
    $_SESSION['bdError'] ="Veuillez attacher une image !!";
    header('location:ajout.php');
}


