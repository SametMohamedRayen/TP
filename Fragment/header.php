<?php
if(session_id() == '')
{
    session_start();
}

include_once "autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo isset($title) ? $title : 'Page'  ?></title>
    <link rel="stylesheet" href="/uploads/bootstrapweb.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <ul class="navbar-nav mr-auto">
        <?php if(isset($_SESSION['is_connected']))
        { ?>
        <li class="nav-item active">
            <a class="nav-link" href="http://<?=$_SERVER["HTTP_HOST"]?>/home.php">Home
                <span class="sr-only">(current)</span>
            </a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="http://<?=$_SERVER["HTTP_HOST"]?>/ajout.php">Ajouter</a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="http://<?=$_SERVER["HTTP_HOST"]?>/history.php">History</a>
        </li>
        <li class="nav-item">
            <form>
                <button class="btn btn-danger" style="margin-left:920px;" type="submit" formaction="../logout.php">Logout</button>
            </form>
        </li>
        <?php } ?>
    </ul>
</nav>
