<?php

include('config/db_connect.php');

if (isset($_POST['delete'])) {
    include('queries/delete_pizza.php');

    include('config/db_disconnect.php');
}

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
        <form action="details.php" method="POST">
            <input type="hidden" name='pizza_id' value="<?php echo $id ?>" />
            <input type='submit' name='delete' value='delete' class="btn brand center z-depth-0" />
        </form>
    <?php else : ?>
        <h5>No such pizza exists.</h5>
    <?php endif ?>
</div>

<?php include('templates/footer.php'); ?>

</html>