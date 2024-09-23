<?php
$datuakFitxategia = "datuak.json";
$izenArray = array("Izena", "1.Abizena", "2.Abizena");
$izenTaula = array(
    array(15, 5, 0),
    array(26, 35, 3),
    array(5, 32, 3),
    array(23, 43, 32),
);
 
$datuakEncode = json_encode($izenTaula, JSON_PRETTY_PRINT);
file_put_contents($datuakFitxategia, $datuakEncode);

?>


