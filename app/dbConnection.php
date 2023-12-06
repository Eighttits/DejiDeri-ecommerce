<?php

include 'config.php';

$servername = constant("BD_HOST");
$username = constant("BD_USER");
$password = constant("BD_PASS");
$database = constant("BD");
$encode = constant("BD_ENCODE");

$conn = mysqli_connect($servername, $username, $password, $database);

mysqli_set_charset($conn, $encode);
?>