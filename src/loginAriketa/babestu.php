<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post"  enctype="multipart/form-data">
    <label for="erabiltzailea">Erabiltzailea:</label>
    <input type="text" name="erabiltzailea" id=""><br><br>
    
    <label for="password">Pasahitza:</label>
    <input type="password" name="pasahitza" id=""><br><br>
    
    <label for="irudia">Argazkia:</label>
    <input type="file" name="irudia" id=""><br><br>
    
    <input type="submit" value="Bidali" name="bidali">
</form>
<a href="./login.php">Kontu bat duzu? Logetau</a>

</body>
</html>