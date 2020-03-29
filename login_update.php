<?php include "includes/header.php"; ?>
<?php include "functions.php"; ?>

<?php
    if (isset($_POST['submit'])) {
        updateUser();
    }
?>

<div class="container">
    <div class="col-sm-6">
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" placeholder="username" class="form-control" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" placeholder="password" class="form-control" />
            </div>

            <div class="form-group">
                <select name="id" value="id" id="">
                    <?php fetchIds(); ?>
                </select>
            </div>

            <input type="submit" name="submit" class="btn btn-success" value="UPDATE" />
        </form>
    </div>

<?php include "includes/footer.php"; ?>