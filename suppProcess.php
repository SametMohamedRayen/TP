<?php

include "autoload.php";


$cin = $_POST["supp_cin"];
$personneRepo = new PersonneRepository();
$personneRepo = $personneRepo->get("cin = ".$cin);
$_COOKIE['history'] += (["Personne ".$personneRepo[0]->nom." ".$personneRepo[0]->prenom." est supprimé at ".date("Y/m/d H:i")."."]);
$personneRepo = new PersonneRepository();
$personneRepo->suppPersonne($cin);
header("location:home.php");



