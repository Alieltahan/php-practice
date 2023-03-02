<?php

// connect to the database
$conn = mysqli_connect('localhost', 'speed', 'pass123', 'ninja', 88);

// check connection
if (!$conn) {
	echo 'Connection error: ' . mysqli_connect_error();
}
