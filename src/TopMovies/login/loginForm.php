<?php 
include("../connect_database.php");
session_start();

$erabiltzaileaForm = $_POST['erabiltzailea'] ?? null; 
$pasahitzaForm = $_POST['pasahitza'] ?? null;

if ($erabiltzaileaForm && $pasahitzaForm) {
    
    $erabiltzaileakSQL = $conn->prepare("SELECT * FROM erabiltzaileak WHERE izena = ? AND pasahitza = ?");
    $erabiltzaileakSQL->bind_param("ss", $erabiltzaileaForm, $pasahitzaForm);
    $erabiltzaileakSQL->execute();
    $result = $erabiltzaileakSQL->get_result();
   
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row['izena'] == $erabiltzaileaForm && $row['pasahitza'] == $pasahitzaForm) {
                $_SESSION['erabiltzaileaId'] = $row['id']; 
                $_SESSION['erabiltzailea'] = $row['izena'];
                $_SESSION['pasahitza'] = $row['pasahitza'];
                header("Location: ../index.php");
                exit();
            }
        }
    } else {
        echo "Erabiltzailea edo pasahitza okerra da.";
    }

    // Cerrar la declaración preparada
    $erabiltzaileakSQL->close();
} else {
    echo "Sartu erabiltzailea eta pasahitza.";
}

// Cerrar la conexión
$conn->close();
?>

