<?php

    session_start();

    $_SESSION['erabiltzailea'] = $_POST['erabiltzailea'];
    $_SESSION['pasahitza'] = $_POST['password'];


    echo "Erabiltzailea: " . $_SESSION['erabiltzailea'];
    