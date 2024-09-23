<?php

if (isset($_POST['bidali'])) {

    if (isset($_POST['izena']) && !empty($_POST['izena'])) {
        if (strlen($_POST['izena']) <16) {
            echo "Izena: " . $_POST['izena'] . "<br>";
        } else {
            echo "Izena luzegia da";
        }
        
    }

    if (isset($_POST['deskripzioa']) && !empty($_POST['deskripzioa'])) {
        if (strlen($_POST['deskripzioa']) < 50) {
            echo "Deskripzioa: " . $_POST['deskripzioa'] . "<br>";
        }else {
            echo "deskripzioa luzegia da.";
        }
        
    }

    if (isset($_POST['generoa']) && !empty($_POST['generoa'])) {

        echo "Generoa: " . $_POST['generoa'] . "<br>";
    }

    if (isset($_POST['adina']) && !empty($_POST['adina'])) {
        echo "Adina: " . $_POST['adina'] . "<br>";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Email: " . $_POST['email'] . "<br>";
        } else {
            echo "Email-a ez du formatu egokia";
        }
        
    }

    if (isset($_POST['argazkia']) && !empty($_POST['argazkia'])) {
        echo "Argazkia: <img src='irudiak/" . $_POST['argazkia'] . "' " .  "width='200' height='200'>" . "<br>";
    }
    
    
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        if (strlen($_POST['password']) >= 8 && 16 < strlen($_POST['password'])) {
            echo "Pasahitza: " . $_POST['password'] . "<br>";
        } 
    }
}