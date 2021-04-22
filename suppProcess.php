<?php

include "autoload.php";


$cin = $_POST["supp_cin"];
$personneRepo = new PersonneRepository();
$personneRepo = $personneRepo->get("cin = ".$cin);
$histo = new HistoriqueRepository();
$histo->ajout(" est supprimé ",date("Y/m/d H:i"),"Personne ".$personneRepo[0]->nom." ".$personneRepo[0]->prenom);
$personneRepo = new PersonneRepository();
$personneRepo->suppPersonne($cin);
header("location:home.php");



