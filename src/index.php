<?php

$izenArray = array("Izena", "1.Abizena", "2.Abizena");
$izenTaula = array(
    array("Izena" => "Iker", "1.Abizena" => "Atxaga", "2.Abizena" => "Robles"),
    array("Izena" => "Bittor", "1.Abizena" => "Telletxea", "2.Abizena" => "Aginaga"),
    array("Izena" => "Charles", "1.Abizena" => "Leclerc", "2.Abizena" => "Leclerc"),
    array("Izena" => "Fernando", "1.Abizena" => "Alonso", "2.Abizena" => "Diaz"),
);

echo "<table style='border-collapse: collapse; width: 50%; text-align: left; margin: 20px auto; font-family: Arial, sans-serif;'>
        <tr style='background-color: #4CAF50; color: white;'>";

foreach ($izenArray as $izena) {
    echo "<th style='border: 1px solid #ddd; padding: 8px;'>$izena</th>";
}

echo "</tr>";

foreach ($izenTaula as $izena) {
    echo "<tr style='border-bottom: 1px solid #ddd;'>
            <td style='border: 1px solid #ddd; padding: 8px;'>".$izena["Izena"]."</td>
            <td style='border: 1px solid #ddd; padding: 8px;'>".$izena["1.Abizena"]."</td>
            <td style='border: 1px solid #ddd; padding: 8px;'>".$izena["2.Abizena"]."</td>
          </tr>";
}

echo "</table>";
?>


