<?php
$title = "Modifier";
include_once("Fragment/header.php");

$personneRepo = new PersonneRepository();
$cin = $_POST["modif_cin"];
$personneRepo = $personneRepo->get("cin = ".$cin);

?>
<div class="container">
<form enctype="multipart/form-data" method="post" action="modifProcess.php">
    <fieldset>
        <br>
        <legend>Modification de <?=$personneRepo[0]->nom." ".$personneRepo[0]->prenom?></legend>
        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
                <input type="text" id="nom" name="nom" class="form-control-plaintext"  value="<?=$personneRepo[0]->nom?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
                <input type="text" id="prenom" name="prenom" class="form-control-plaintext"  value="<?=$personneRepo[0]->prenom?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
                <input type="text" id="age" name="age" class="form-control-plaintext"  value="<?=$personneRepo[0]->age?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="section" class="col-sm-2 col-form-label">Section</label>
            <div class="col-sm-10">
                <input type="text" id="section" name="section" class="form-control-plaintext"  value="<?=$personneRepo[0]->section?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="cin" class="col-sm-2 col-form-label">Cin</label>
            <div class="col-sm-10">
                <input type="text"  id="cin" name="cin" class="form-control-plaintext"  value="<?=$personneRepo[0]->cin?>">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Ajouter Image</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="photo" >
            <br>
            <img  alt="pic" id ="photo" src= "<?= $personneRepo[0]->photo ?>" style="width: 100px;height: 100px;">
            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <label>
            <input style="display: none;" name="path" value="<?= $personneRepo[0]->photo ?>">
        </label>
        <button type="submit" class="btn btn-primary" name="modif_cin" value="<?= $cin ?>">Modifier</button>
    </fieldset>
</form>
</div>

