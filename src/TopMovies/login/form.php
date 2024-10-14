<?php

include("../connect_database.php");
session_start();


$_SESSION['erabiltzailea'] = $_POST['erabiltzailea'];
$_SESSION['pasahitza'] = $_POST['pasahitza'];

$erabiltzailea = $_POST['erabiltzailea'];
$pasahitza = $_POST['pasahitza'];
    
$sql = "INSERT INTO erabiltzaileak (izena, pasahitza)
        VALUES ('$erabiltzailea', '$pasahitza')";
        
if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
// Cerrar la conexión
$conn->close();
?>


