<?php 
include("../connect_database.php");
session_start();

$erabiltzailea =  get_Erabiltzailea();
$_SESSION['erabiltzaileaId'] = $erabiltzailea;

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
    $erabiltzaileakSQL->close();
} else {
    echo "Sartu erabiltzailea eta pasahitza.";
}

function get_Erabiltzailea() {
    global $conn;
    $selectIzenaSQL= $conn->prepare("SELECT * FROM erabiltzaileak where izena = ?");
    $selectIzenaSQL->bind_param("s", $_SESSION['erabiltzailea']);
    $selectIzenaSQL->execute();
    $result = $selectIzenaSQL->get_result();
    if ($row = $result->fetch_assoc()) {
        return $row['id']; 
    }
}

$conn->close();
?>

