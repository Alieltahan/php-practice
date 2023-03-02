<?php

include('config/db_connect.php');

// check GET request id param
if (isset($_GET['id'])) {

    include('queries/query_pizza.php');

    include('config/db_disconnect.php');
}

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<div class="container center">
    <?php if ($pizza) : ?>
        <h4><?php echo $pizza['title']; ?></h4>
        <p>Created by <?php echo $pizza['email']; ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients:</h5>
        <p><?php echo $pizza['ingredients']; ?></p>
    <?php else : ?>
        <h5>No such pizza exists.</h5>
    <?php endif ?>
</div>

<?php include('templates/footer.php'); ?>

</html>