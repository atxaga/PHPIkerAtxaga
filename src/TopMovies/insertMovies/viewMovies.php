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
            max-width: 1000px; /* Aumentado para más espacio horizontal */
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
            text-align: center; /* Centrar título */
        }
        .movie-list {
            display: flex; /* Usar flexbox para alinear horizontalmente */
            flex-wrap: wrap; /* Permitir que se ajusten en múltiples líneas si es necesario */
            justify-content: space-around; /* Espaciado entre elementos */
        }
        .movie-card {
            width: 200px; /* Ancho fijo para cada película */
            margin: 10px; /* Margen entre las tarjetas */
            background-color: #f9f9f9; /* Fondo claro para cada tarjeta */
            padding: 10px;
            border-radius: 5px; /* Esquinas redondeadas */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra de la tarjeta */
            text-align: center; /* Centrar texto dentro de la tarjeta */
        }
        .movie-image {
            width: 100%; /* Ancho al 100% del contenedor de la tarjeta */
            height: 150px; /* Altura fija para todas las imágenes */
            margin-bottom: 10px; /* Espaciado inferior */
            border-radius: 5px; /* Esquinas redondeadas opcionales */
            object-fit: cover; /* Cubre el contenedor sin distorsionar */
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
            echo "<div class='movie-list'>"; // Comienza la lista de películas
            while ($row = $result->fetch_assoc()) {
                echo "<div class='movie-card'>"; // Tarjeta para cada película
                echo "<h2>Filma:</h2>"; 
                echo "<p><strong>Izena:</strong> " . $row['izena'] . "</p>";
                echo "<p><strong>Isan zenbakia:</strong> " . $row['isan'] . "</p>";
                echo "<p><strong>Estrenu data:</strong> " . $row['estrenoa'] . "</p>";
                echo "<p><strong>Puntuazioa:</strong> " . $row['puntuazioa'] . "</p>";
                echo "<img class='movie-image' src='../irudiak/". $row['irudia']."' alt='Irudia de " . $row['izena'] . "'>";
                echo "</div>"; // Cierra la tarjeta
            } 
            echo "</div>"; // Cierra la lista de películas

            $selectIzenaSQL->close();
            $conn->close();
        ?>
    </div>
</body>
</html>

