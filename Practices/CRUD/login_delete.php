<?php
include "db.php";
include "functions.php";

deleteData();

?>

<?php include "CRUD/includes/header.php"; ?>

<div class="container">
    <div class="col-sm-6">
        <h2 class="text-center">Delete</h2>

        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Type Username">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>

<?php include "CRUD/includes/footer.php"; ?>