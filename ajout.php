<?php
$title = "Ajout";
include_once("Fragment/header.php");
?>
<div class="container">
    <br>
    <form action="ajoutProcess.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Ajouter Personne</legend>
            <div class="form-group">
                <label class="col-form-label" for="inputDefault1">Name</label>
                <input type="text" class="form-control" placeholder="Name" id="inputDefault1" name="nom">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="inputDefault2">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" id="inputDefault2" name="prenom">
            </div>
            <div>
                <label for="customRange1">Age</label>
                <small class="text-muted" id="demo"></small class="text-muted">
                <input type="range" class="custom-range" id="customRange1" min="18" max="100" name="age">
                <script>
                    let slider = document.getElementById("customRange1");
                    slider.defaultValue = 21;
                    let output = document.getElementById("demo");
                    output.innerHTML = slider.value; // Display the default slider value

                    // Update the current slider value (each time you drag the slider handle)
                    slider.oninput = function() {
                        output.innerHTML = this.value;
                    }
                </script>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="inputDefault3">Section</label>
                <input type="text" class="form-control" placeholder="Section" id="inputDefault3" name="section">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="inputDefault4">CIN</label>
                <input type="text" class="form-control" placeholder="CIN" id="inputDefault4" name="cin">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Ajouter Image</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="photo">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
            <?php
                if(isset($_SESSION["bdError"]) && ($_SESSION["bdError"] != ''))
                {?>
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?=$_SESSION["bdError"]?></strong>
            </div>
               <?php }
                ?>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </fieldset>
    </form>
</div>
