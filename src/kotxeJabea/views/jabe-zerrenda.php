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
                echo "<li>".$kotxea['matrikula']."<br><br></li>";
                foreach ($jabeak as $jabea) {
                    if ($jabea['id'] == $kotxea['jabea_id']) {
                        echo "Oraingo jabea: " . $jabea['izena']. "<br><br>";
                    }
                }
                echo "Modeloa: " . $kotxea['modeloa']. "<br><br>";
                echo "Matrikulazio Data: " . $kotxea['matrikulazio_data']. "<br><br>";
                if ($kotxea['itv'] == 1){
                    echo "ITV: Bai <br><br>";
                } else {
                    echo "ITV: EZ <br><br>";
                }
                ?>
                <select id="selectJabea" name="selectJabea">
                <option value="">--Aukeratu Jabea--</option>
                <?php
                    foreach ($jabeak as $jabea) {
                            echo "<option value=".$jabea['id'].">".$jabea['izena']."</option>";
                    }
                    echo "<input type='submit' name='asignatu' value='Asignatu'>";
                    echo "<input type='submit' name='ezabatu' formaction='kotxea-ezabatu.php' value='ezabatu'>";
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
        <form action="kotxea-gehitu.php" method="post">
            <input type="hidden" name="herria_id" value="<?php echo $herria_id ?>">
            Modeloa: <input type="text" name="modeloa"/><br>
            Matrikula: <input type="text" name="matrikula"/><br>
            Matrikulazio data: <input type="date" name="matrikulazioData"/><br>
            Itv: <select name="itv" id="itv">
                <option value="1">bai</option>
                <option value="0">ez</option>
            </select><br><br>
        <button type="submit" name="kotxeaGehitu">Kotxe berria gehitu</button>
        </form>
        <ul>
            
        </ul>
</body>
</html>