<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Herri zerrenda</h1>
    <form action="" method="get">
    <ul>
        <select name="" id="select"><
        <option value="">--Aukeratu Herria--</option>
    <?php
        
        foreach ($herriak as $herria) {
            echo "<option value=".$herria['izena'].">".$herria['izena']."</option>";
        }
    ?>
    </select>
    </ul>
    <input type="submit" value="Gehitu">
    <input type="submit" value="Ezabatu">
    <input type="submit" value="Aldatu">
    </form>
</body>
</html>