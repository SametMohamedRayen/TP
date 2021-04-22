<?php
$title = "Home";
include_once("Fragment/header.php");

$personneRepo = new PersonneRepository();
$personneRepo = $personneRepo->getAll();

$i=0;

?>
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">N°</th>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Age</th>
        <th scope="col">Section</th>
        <th scope="col">CIN</th>
        <th scope="col">Picture</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <?php
foreach ($personneRepo as $value)
{
    ?>
    <tr class="table-active">
        <th scope="row"><?=++$i?></th>
        <td><?=$value->nom?></td>
        <td><?=$value->prenom?></td>
        <td><?=$value->age?></td>
        <td><?=$value->section?></td>
        <td><?=$value->cin?></td>
        <td><img alt="pic" src="<?=$value->photo?>" style="width: 25px;height: 25px;"/></td>
        <td> <form action="modif.php" method="post">
        <button type="submit" class="btn btn-outline-primary" name="modif_cin" value="<?=$value->cin?>">Modifier</button>
    </form>
        </td>
        <td><form action="suppProcess.php" method="post">
        <button type="submit" class="btn btn-outline-primary" name="supp_cin" value="<?=$value->cin?>">Supprimer</button>
    </form>
        </td>
    </tr><?php
}?>
    </tbody>
</table>

