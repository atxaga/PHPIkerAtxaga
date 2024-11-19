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


$modeloa = $_REQUEST['modeloa'];
$matrikula = $_REQUEST['matrikula'];
$matrikulaData = $_REQUEST['matrikulazioData'];
$itv = $_REQUEST['itv'];
if (isset($_POST['kotxeaGehitu'])) {
    $kotxeaController = new KotxeaController();
    $kotxeaController->kotxeaGehitu($modeloa, $matrikula, $matrikulaData, $itv);
}



