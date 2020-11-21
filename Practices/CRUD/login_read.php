<?php
include 'db.php';
include "functions.php";
?>


<?php //include "CRUDincludes/header.php"; ?>

<div class="container">
    <div class="col-sm-6">
        <pre>
            <?php readData(); ?>
        </pre>

    </div>
</div>

<?php include "CRUD/includes/footer.php"; ?>