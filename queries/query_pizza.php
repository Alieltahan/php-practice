<?php
// escape sql chars
$id = mysqli_real_escape_string($conn, $_GET['id']);

// make sql
$sql = "SELECT * FROM pizzas WHERE id = $id";

// get the query result
$result = mysqli_query($conn, $sql);

// fetch result in array format
$pizza = mysqli_fetch_assoc($result);
