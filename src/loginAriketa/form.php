<?php

session_start();

$servername = "db";
$username = "root";
$password = "root";
$dbname = "myDB";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$erabiltzailea = $_POST['erabiltzailea'];
$pasahitza = $_POST['pasahitza'];


    
        $sql = "INSERT INTO erabiltzaileak (izena, pasahitza)
                VALUES ('$erabiltzailea', '$pasahitza')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    

// Cerrar la conexión
$conn->close();
?>


