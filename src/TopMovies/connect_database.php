<?php

$servername = "db";
$username = "root";
$password = "root";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
    

?>