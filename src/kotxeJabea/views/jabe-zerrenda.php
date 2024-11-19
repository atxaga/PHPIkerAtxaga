<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h1>Jabe zerrenda</h1>
        <ul>
        <?php
        
            foreach ($kotxeak as $kotxea) {
                echo "<form action='kotxeaJabeariAsignatu.php' method='post'>";
                echo "<li>".$kotxea['matrikula']."</li>";
                foreach ($jabeak as $jabea) {
                    if ($jabea['id'] == $kotxea['jabea_id']) {
                        echo "Oraingo jabea: " . $jabea['izena']. "<br><br>";
                    }
                }
                ?>
                <select id="selectJabea" name="selectJabea">
                <option value="">--Aukeratu Jabea--</option>
                <?php
                    foreach ($jabeak as $jabea) {
                            echo "<option value=".$jabea['id'].">".$jabea['izena']."</option>";
                    }
                    echo "<input type='submit' name='asignatu' value='Asignatu'>";
                    echo "<input type='hidden' name='selectKotxea' value='".$kotxea['id']."'>";
                ?>
                </select><br><br>
                </form>
                <hr>
                <?php
            }
        ?>
        </ul>
        <input type="submit" name="selectIzena" value="Kotxen lista ikusi">
        <h1>Kotxe Zerrenda</h1>
        <ul>
            
        </ul>
</body>
</html>