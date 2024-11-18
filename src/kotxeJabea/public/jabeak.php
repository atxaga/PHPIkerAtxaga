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

$jabeaController = new JabeaController();
$jabeaController->listAll();

$kotxeaController = new KotxeaController();
$kotxeaController->listAll();