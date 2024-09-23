<?php

if (isset($_POST['bidali'])) {

    if (isset($_POST['izena']) && !empty($_POST['izena'])) {

        echo "Izena: " . $_POST['izena'] . "<br>";
    }

    if (isset($_POST['deskripzioa']) && !empty($_POST['deskripzioa'])) {

        echo "Deskripzioa: " . $_POST['deskripzioa'] . "<br>";
    }

    if (isset($_POST['generoa']) && !empty($_POST['generoa'])) {

        echo "Generoa: " . $_POST['generoa'] . "<br>";
    }

    if (isset($_POST['adina']) && !empty($_POST['adina'])) {

        echo "Adina: " . $_POST['adina'] . "<br>";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {

        echo "Email: " . $_POST['email'] . "<br>";
    }

    if (isset($_POST['argazkia']) && !empty($_POST['argazkia'])) {
        echo "<img src='/src/ariketaForm/irudiak/" . $_POST['argazkia'] . "'>" . "<br>";
    }
    
    
    if (isset($_POST['password']) && !empty($_POST['password'])) {

        echo "Pasahitza: " . $_POST['password'] . "<br>";
    }
}