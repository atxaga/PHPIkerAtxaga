<?php  
    include("../connect_database.php");
    session_start();
    $erabiltzailea = $_SESSION['erabiltzaileaId'];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $selectIzenaSQL= $conn->prepare("SELECT * FROM movies where erabiltzailea = ?");
        $selectIzenaSQL->bind_param("s", $erabiltzailea);
        $selectIzenaSQL->execute();
        $result = $selectIzenaSQL->get_result();
        if ($row = $result->fetch_assoc()) {
            echo $row; // O el campo que necesites, asegúrate de que 'id' sea correcto
        }
    ?>
</body>
</html>