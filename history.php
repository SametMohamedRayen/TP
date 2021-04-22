<?php
$title = "History";
include_once "Fragment/header.php";
include_once "autoload.php";
$histoRepo = new HistoriqueRepository();
$histoRepo->ajout(" a consulté historique ",date("Y/m/d H:i"),"Admin");
$histoRepo = $histoRepo->getAll();

?>
<br>
<div class="container">
<h2>History</h2>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Log</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($histoRepo as $value)
  {
      ?>
  <tr class="table-info">
      <th scope="row"><?=$value->who." ".$value->action." at ".$value->date."." ?></th>
 <?php }
  ?>
  </tbody>
</table>
