<?php include "includes/header.php"; ?>

<?php session_start(); ?>

<?php
  $_SESSION['greeting'] = "Greetings from session 1.";
 ?>


<div class="">
    <div class="">
      <h1>Your session is has started.</h1>
    </div>
</div>

<?php include "includes/footer.php"; ?>
