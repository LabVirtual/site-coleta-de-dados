<?php

// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "guilherme";
$dbname = "dataset";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error()) {
    echo "Connection failed: " . mysqli_connect_error();
}

?>
