<?php include "includes/header.php"; ?>

<?php session_start(); ?>

<div class="">
    <div class="">

      <h1>
        <?php
          if(isset($_SESSION["greeting"])) {
            echo $_SESSION['greeting'];
          } else {
            echo "No session initiated.";
          }
        ?>
      </h1>

    </div>
</div>

<?php include "includes/footer.php"; ?>
