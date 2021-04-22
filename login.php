<?php
   $title = "Login";
   include_once("Fragment/header.php");

   if(isset($_SESSION['is_connected']))
   {
       header("location:home.php");
   }
   ?>

<div class="container">
    <br>
<form action="loginProcess.php" method="post">
    <fieldset>
        <legend>Login</legend>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" >Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>

        <?php
         if(isset($_SESSION["login_error"]))
         {
        ?>
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?=$_SESSION["login_error"]?></strong>
        </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
</div>


