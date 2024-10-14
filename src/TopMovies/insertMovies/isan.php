<?php
include("../connect_database.php");


function isanHutsik() {
    global $conn, $izena;

    $selectIzena = $conn->prepare("SELECT * FROM Movies WHERE izena like ?");
    $izenaLike = "%" . $izena . "%";
    $selectIzena->bind_param("s", $izenaLike);
    $selectIzena->execute();
    $result = $selectIzena->get_result();
    if ($result) {
        echo $izena . "-en filmak: <br><br>";
        foreach ($result as $izena) {
            echo $izena["izena"] . "<br><br>";
        }
    }
    
}