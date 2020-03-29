<?php include "includes/header.php"; ?>
<?php include "functions.php"; ?>

<?php
    if (isset($_POST['submit'])) {
        deleteUser();
    }
?>

<div class="container">
    <div class="col-sm-6">
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <select name="id" value="id" id="">
                    <?php fetchIds(); ?>
                    <?php deleteUser(); ?>
                </select>
            </div>
            <input type="submit" name="submit" class="btn btn-danger" value="DELETE" />
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>