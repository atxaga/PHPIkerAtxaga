<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="kotxeaJabeariAsignatu.php" method="get">
        <h1>Jabe zerrenda</h1>
        <ul>
        <select id="selectJabea" name="selectJabea">
        <option value="">--Aukeratu Jabea--</option>
        <?php
        
            foreach ($jabeak as $jabea) {
                echo "<option value=".$jabea['id'].">".$jabea['izena']."</option>";
            }
        ?>
        </select>
        </ul>
        <input type="submit" name="selectIzena" value="Kotxen lista ikusi">
        <h1>Kotxe Zerrenda</h1>
        <ul>
            <select id="selectKotxea" name="selectKotxea">
            <option value="">--Aukeratu Kotxea--</option>
        <?php
            
            foreach ($kotxeak as $kotxea) {
                echo "<option value=".$kotxea['id'].">".$kotxea['modeloa']."</option>";
            }
           
        
        ?>
        </select>
        </ul>
        <input type="submit" value="Asignatu">
    </form>
</body>
</html>