<?php

include_once "autoload.php";

$old_cin = $_POST["modif_cin"];

$nom =$_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$section = $_POST['section'];
$cin = $_POST['cin'];
$path = $_POST['path'];

$personne = new PersonneRepository();

if((isset($_FILES['photo']) && ($_FILES['photo']) != "") && ($_FILES['photo']['name']!="")){
    $path = "uploads/".uniqid().$_FILES['photo']['name'];
    copy($_FILES['photo']['tmp_name'], $path);
}
$personne->modifPersonne($nom,$prenom,$section,$age,$cin,$path,$old_cin);

$histo = new HistoriqueRepository();
$histo->ajout(" est modifé ",date("Y/m/d H:i"),"Personne ".$nom." ".$prenom);

header("location:home.php");




