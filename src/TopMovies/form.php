<?php

include("connect_database.php");

$izena;
$isan;
$estrenoa;
$puntuazioa;



if (isset($_POST['bidali'])) {
    
    izena();
    isan();
    estrenoa();
    puntuazioa();

    $insertSQL = "INSERT INTO Movies (izena, isan, estrenoa, puntuazioa) values ('$izena', '$isan', '$estrenoa', '$puntuazioa')";

    $conn->query($insertSQL);
}

function izena() {
    global $izena;
    if (isset($_POST['izena'])&&!empty($_POST['izena'])) {
        $izena = $_POST['izena'];
    }   
}

function isan() {
    global $isan;
    if (isset($_POST['isan'])&&!empty($_POST['isan'])) {
        if (strlen($_POST['isan']) == 8) {
            $isan = $_POST['isan'];
        }
       
    }   
}

function estrenoa() {
    global $estrenoa;
    if (isset($_POST['estrenoa'])&&!empty($_POST['estrenoa'])) {
        $estrenoa = $_POST['estrenoa'];
    }   
}

function puntuazioa() {
    global $puntuazioa;
    if (isset($_POST['puntuazioa'])&&!empty($_POST['puntuazioa'])) {
        $puntuazioa = $_POST['puntuazioa'];
    }   
}