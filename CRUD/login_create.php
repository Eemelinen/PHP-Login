<?php include "includes/header.php"; ?>

<?php include "functions.php"; ?>

<?php createUser(); ?>

<div class="container">
    <div class="col-sm-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input name="username" type="text" placeholder="username" class="form-control" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" placeholder="password" class="form-control" />
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="CREATE" />
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>