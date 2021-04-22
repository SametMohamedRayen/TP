<?php
include_once "Fragment/header.php";

?>
<h2>History</h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Log</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($_COOKIE["history"] as $val) {?>
<tr class="table-info">
      <th scope="row"><?=$val?></th>
    </tr>
  <?php }?>
  </tbody>
</table>