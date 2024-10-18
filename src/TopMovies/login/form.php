<?php

include("../connect_database.php");
session_start();

$_SESSION['erabiltzailea'] = $_POST['erabiltzailea'];
$_SESSION['pasahitza'] = $_POST['pasahitza'];
$erabiltzailea1 =  get_Erabiltzailea();
$_SESSION['erabiltzaileaId'] = $erabiltzailea1;

$erabiltzailea = $_POST['erabiltzailea'];
$pasahitza = $_POST['pasahitza'];

$selectErabiltzaileSQL = "SELECT id FROM erabiltzaileak ORDER BY id DESC LIMIT 1";
$result = $conn->query($selectErabiltzaileSQL);
$azkenErabil = $result->fetch_assoc();

$id = $azkenErabil['id'] + 1; 

$sql = "INSERT INTO erabiltzaileak (id, izena, pasahitza)
        VALUES ('$id', '$erabiltzailea', '$pasahitza')";
        
if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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


