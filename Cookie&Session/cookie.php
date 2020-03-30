<?php include "includes/header.php"; ?>

<?php

    $name = "tastyCookie";
    $value = 100;
    // Time returns all the seconds from 1970 till now. Adding 1 week expiration date.
    $expiration = time() + (60 * 60 * 24 * 7);

    setCookie($name, $value, $expiration);

?>

<div class="">
    <div class="">

      <h1>Your cookie is ready.</h1>

      <p>1. Open settings.</p>
      <p>2. Search for cookie.</p>
      <p>3. See all cookie and site data.</p>

      <?php
        if(isset($_COOKIE["tastyCookie"])) {
          echo "Tasty cookie found!";
        } else {
          echo "No Cookie.";
        }
      ?>

    </div>
</div>

<?php include "includes/footer.php"; ?>
