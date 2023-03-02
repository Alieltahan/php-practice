<?php
// escape sql chars

$id = mysqli_real_escape_string($conn, $_POST['pizza_id']);
echo $id . 'Deleting....';
// make sql
$sql = "DELETE FROM pizzas WHERE id = $id";

// get the query result
$result = mysqli_query($conn, $sql);

if ($result) {
    //success
    echo 'Success Deleted!';
    header('Location: index.php');
} {
    //failure
    echo 'query error: ' . mysqli_error($conn);
}
