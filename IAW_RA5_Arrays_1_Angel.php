<?php
$ciutats = ["Tarragona", "Reus", "Tortosa", "Lleida"];


echo "<p>Primera ciutat: " . $ciutats[0] . "</p>";


echo "<p>Última ciutat: " . $ciutats[3] . "</p>";


echo "<p>Total de ciutats: " . count($ciutats) . "</p>";


echo "<ul>";

foreach ($ciutats as $ciutat) {
    echo "<li>" . $ciutat . "</li>";
}

echo "</ul>";
?>
