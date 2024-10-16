<?php  
    include("../connect_database.php");
    session_start();
    $erabiltzailea = $_SESSION['erabiltzaileaId'];
    
    if (empty($_SESSION['erabiltzailea']) && empty($_SESSION['pasahitza'])) {
        header("Location: login/babestu.php");
        exit();      
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Película</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
            $selectIzenaSQL = $conn->prepare("SELECT * FROM movies WHERE erabiltzailea = ?");
            $selectIzenaSQL->bind_param("s", $erabiltzailea);
            $selectIzenaSQL->execute();
            $result = $selectIzenaSQL->get_result();
            echo "<h1>Filmen zerrenda</h1>";
            while ($row = $result->fetch_assoc()) {
                echo "<h1>Filma: </h1>"; 
                echo "<p><strong>Izena:</strong> " . $row['izena'] . "</p>";
                echo "<p><strong>Isan zenbakia:</strong> " . $row['isan'] . "</p>";
                echo "<p><strong>Estrenu data:</strong> " . $row['estrenoa'] . "</p>";
                echo "<p><strong>Puntuazioa:</strong> " . $row['puntuazioa'] . "</p>";
            } 

            $selectIzenaSQL->close();
            $conn->close();
        ?>
    </div>
</body>
</html>
