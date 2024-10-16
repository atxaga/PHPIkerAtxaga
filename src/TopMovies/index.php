<?php  
    session_start();

    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: login/babestu.php");
        exit();
    }

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
    <title>Top Movies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Kaixo <?php echo $_SESSION["erabiltzailea"]; ?>!</h1>
    
    <form action="insertMovies/form.php" method="post">
        <h2>Top Movies</h2>
        <label for="izena">Izena</label>
        <input type="text" name="izena" id="izena" placeholder="Sartu filmaren izena">

        <label for="isan">Isan zenbakia</label>
        <input type="number" name="isan" id="isan" placeholder="Sartu filmaren isan zenbakia">

        <label for="estrenoa">Estrenaldi data</label>
        <input type="date" name="estrenoa" id="estrenoa">

        <label for="puntuazioa">Puntuazioa</label>
        <select name="puntuazioa" id="puntuazioa">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <button type="submit" name="bidali">Bidali</button>
    </form>

    <form action="index.php" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>

    <a href="insertMovies/viewMovies.php">Sartutako filmak ikusi</a>
</body>
</html>

