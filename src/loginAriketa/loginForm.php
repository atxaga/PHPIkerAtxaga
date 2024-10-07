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
$erabiltzaileaForm = $_POST['erabiltzailea'];
$pasahitzaForm = $_POST['pasahitza'];

echo $erabiltzaileaForm . $pasahitzaForm;

$sqlGetErabiltzaileak = "SELECT * FROM erabiltzaileak";

$erabiltzaileak = $conn->query($sqlGetErabiltzaileak);

if ($erabiltzaileak->num_rows > 0) {
    // Recorrer los resultados
    while($erabiltzaile = $erabiltzaileak->fetch_assoc()) {
        if ($erabiltzaile["izena"] == $erabiltzaileaForm && $erabiltzaile["pasahitza"] == $pasahitzaForm) {
            header("Location: index.php");
            exit();
        }
    }
} else {
    echo "No se encontraron usuarios";
}

// Cerrar la conexión
$conn->close();
?>