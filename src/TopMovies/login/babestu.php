<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Envío</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 15px;
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

        input[type="text"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="form.php" method="post" enctype="multipart/form-data">
        <h2>Erregistratzeko Orria</h2>
        
        <label for="erabiltzailea">Erabiltzailea:</label>
        <input type="text" name="erabiltzailea" id="erabiltzailea" placeholder="Sartu erabiltzailea" required>

        <label for="password">Pasahitza:</label>
        <input type="password" name="pasahitza" id="password" placeholder="Sartu pasahitza" required>

        <input type="submit" value="Bidali" name="bidali">
    </form>
    <a href="./login.php">Kontu bat duzu? Logetau</a>
</body>
</html>
