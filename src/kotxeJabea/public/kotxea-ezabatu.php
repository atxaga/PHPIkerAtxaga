<?php

// config
require_once '../config/config.php';
// models 
require_once '../models/Jabea.php';
require_once '../models/Kotxea.php';
//controllers
require_once '../controllers/JabeaController.php';
require_once '../controllers/KotxeaController.php';


use Controllers\JabeaController;
use Controllers\KotxeaController;
use Models\Kotxea;

if (isset($_POST['selectIzena'])) {

    $idKotxea = $_REQUEST['selectKotxea'];
    $kotxeaController = new KotxeaController();
    $kotxeaController->kotxeList($idJabea);
}


$kotxeaId = $_REQUEST['selectKotxea'];
if (isset($_POST['ezabatu'])) {
    $kotxeaController = new KotxeaController();
    $kotxeaController->kotxeaEzabatu($kotxeaId);
}



