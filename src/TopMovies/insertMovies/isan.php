<?php
include("../connect_database.php");


function isanHutsik() {
    global $conn, $izena;

    $selectIzena = $conn->prepare("SELECT * FROM movies WHERE izena like ?");
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

function isan_dago() {
    global $conn;
    global $isanDago;
    $selectIsanSQL = $conn->prepare("SELECT isan FROM movies");
    $selectIsanSQL->execute();
    $result = $selectIsanSQL->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['isan'] == $_POST['isan']) {
                $isanDago = 1;
            }
        }
    }

    $selectIsanSQL->close();
}

function izena_puntuazioa_update() {
    global $conn;
   
    $updateIzenaPuntuazioaSQL = $conn->prepare("UPDATE movies SET izena = ?, puntuazioa = ? WHERE isan = ?");
    $updateIzenaPuntuazioaSQL->bind_param("sss", $_POST['izena'], $_POST['puntuazioa'], $_POST['isan']);
    $updateIzenaPuntuazioaSQL->execute();

    $updateIzenaPuntuazioaSQL->close();

    header("Location: ../index.php");
    exit();
}

function filma_ezabatu() {
    global $conn;

    $deleteFilmaSQL = $conn->prepare("DELETE FROM movies WHERE isan = ?");
    $deleteFilmaSQL->bind_param("s", $_POST['isan']);
    $deleteFilmaSQL->execute();

    $deleteFilmaSQL->close();

    header("Location: ../index.php");
    exit();
}