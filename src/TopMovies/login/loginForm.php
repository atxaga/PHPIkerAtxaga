<?php 
include("../connect_database.php");
session_start();

$erabiltzaileaForm = $_POST['erabiltzailea'] ?? null; // Usar null coalescing para evitar errores
$pasahitzaForm = $_POST['pasahitza'] ?? null;

if ($erabiltzaileaForm && $pasahitzaForm) {
    // Recuperar todos los usuarios
    $erabiltzaileakSQL = $conn->prepare("SELECT * FROM erabiltzaileak");
    $erabiltzaileakSQL->execute();
    $result = $erabiltzaileakSQL->get_result();

    // Comprobar si las credenciales coinciden
    $usuarioEncontrado = false; // Bandera para verificar si el usuario fue encontrado

    foreach ($result as $erabiltzailea) {
        if ($erabiltzailea["izena"] == $erabiltzaileaForm && $erabiltzailea["pasahitza"] == $pasahitzaForm) {
            $_SESSION['erabiltzaileaId'] = $erabiltzailea['id'];
            header("Location: index.php");
            exit();
        }
    }

    // Si no se encontró el usuario
    echo "Ez da erabiltzaile horretatik aurkitu.";
} else {
    echo "Sartu erabiltzailea eta pasahitza.";
}

// Cerrar la conexión
$conn->close();
?>
