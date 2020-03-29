<?php include "includes/header.php"; ?>
<?php include "functions.php"; ?>

<div class="container">
    <div class="col-sm-6">
        <?php
            $users = fetchAllUsers();
            foreach($users as $user) {
                echo (
                    "<div class='card'>
                        <div class='card-body'>" .
                            $user['id'] .
                            "<br>" . 
                            $user['username'] .
                        "<br>" . 
                            $user['password'] .
                        "</div>
                    </div>"
                );
            }
        ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>