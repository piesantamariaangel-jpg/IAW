<?php

$alumne = [
    "nom" => "Mar",
    "edat" => 19,
    "grup" => "ASIX",
    "nota" => 6.5
];


echo "<h2>" . $alumne["nom"] . "</h2>";

echo "<p>Edat: " . $alumne["edat"] . "</p>";
echo "<p>Grup: " . $alumne["grup"] . "</p>";
echo "<p>Nota: " . $alumne["nota"] . "</p>";


$alumne["nota"] = 8;


$alumne["ciutat"] = "Tarragona";


echo "<h3>Dades actualitzades</h3>";

echo "<table border='1'>";
echo "<tr><th>Camp</th><th>Valor</th></tr>";

foreach ($alumne as $clau => $valor) {
    echo "<tr>";
    echo "<td>" . $clau . "</td>";
    echo "<td>" . $valor . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
