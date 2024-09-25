<?php

    session_start();

    $_SESSION['erabiltzailea'] = $_POST['erabiltzailea'];
    $_SESSION['pasahitza'] = password_hash($_POST['pasahitza'], PASSWORD_DEFAULT);


  if (!empty($_SESSION['erabiltzailea']) && isset($_SESSION['erabiltzailea'])) {
    if (!empty($_SESSION['pasahitza']) && isset($_SESSION['pasahitza'])) {
        header("Location: index.php");
        exit();
    }
  }
