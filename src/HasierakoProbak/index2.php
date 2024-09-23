<?php
$datuakFitxategia = "datuak.json";
$izenArray = array("Izena", "1.Abizena", "2.Abizena");
$izenTaula = array(
    array("Izena" => "Iker", "1.Abizena" => "Atxaga", "2.Abizena" => "Robles"),
    array("Izena" => "Bittor", "1.Abizena" => "Telletxea", "2.Abizena" => "Aginaga"),
    array("Izena" => "Charles", "1.Abizena" => "Leclerc", "2.Abizena" => "Leclerc"),
    array("Izena" => "Fernando", "1.Abizena" => "Alonso", "2.Abizena" => "Diaz"),
);
 
$datuakEncode = json_encode($izenTaula, JSON_PRETTY_PRINT);
file_put_contents($datuakFitxategia, $datuakEncode);

?>


