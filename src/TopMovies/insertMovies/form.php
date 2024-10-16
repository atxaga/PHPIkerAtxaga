<?php

session_start();

include("../connect_database.php");
include("isan.php");

$izena = null;
$isan = null;
$estrenoa = null;
$puntuazioa = null;
$kontIsanHutsik = 0;
$isanDago = 0;
$erabiltzailea =  get_Erabiltzailea();
$_SESSION['erabiltzaileaId'] = $erabiltzailea;


if (isset($_POST['bidali'])) {
    
    izena();
    isan();
    estrenoa();
    puntuazioa();

    if ($kontIsanHutsik == 0) {
        if ($isan != null) {
            $insertSQL = $conn->prepare("INSERT INTO movies (izena, isan, estrenoa, puntuazioa, erabiltzailea) VALUES (?, ?, ?, ?, ?)");
            $insertSQL->bind_param("sssss", $izena, $isan, $estrenoa, $puntuazioa, $erabiltzailea);
            $insertSQL->execute();
    
            header("Location: ../index.php");
            exit();
        }
    }
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

function izena() {
    global $izena;
    if (isset($_POST['izena']) && !empty($_POST['izena'])) {
        $izena = $_POST['izena'];
    } else {
        //echo "Oker sartu duzu izena";
    }
}

function isan() {
    global $isan;
    global $kontIsanHutsik;
    global $isanDago;
    if (isset($_POST['isan']) && !empty($_POST['isan'])) {
        isan_dago();
        if ($isanDago == 0) {
            if (strlen($_POST['isan']) == 8) {
                $isan = $_POST['isan'];
            } else {
                echo "Isan zenbakia oker sartu duzu, 8 digitu eduki behar ditu";
            } 
        } else {
            if (isset($_POST['izena']) && !empty($_POST['izena'])) {
                izena_puntuazioa_update();
            } else {
                filma_ezabatu();
            }
            
        }
        
    } else {
        if (isset($_POST['izena']) && !empty($_POST['izena'])) {
            $kontIsanHutsik++;
            isanHutsik();
        }
    }
}

function estrenoa() {
    global $estrenoa;
    if (isset($_POST['estrenoa']) && !empty($_POST['estrenoa'])) {
        $estrenoa = $_POST['estrenoa'];
    }   
}

function puntuazioa() {
    global $puntuazioa;
    if (isset($_POST['puntuazioa']) && !empty($_POST['puntuazioa'])) {
        $puntuazioa = $_POST['puntuazioa'];
    }   
}
