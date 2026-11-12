<?php
$colors = ["Verd", "Blau", "Blanc", "Negre"];


unset($colors[1]);


echo "<h3>Llista després de unset()</h3>";
echo "<table border='1'>";
echo "<tr><th>Clau</th><th>Color</th></tr>";

foreach ($colors as $clau => $valor) {
    echo "<tr>";
    echo "<td>" . $clau . "</td>";
    echo "<td>" . $valor . "</td>";
    echo "</tr>";
}

echo "</table>";


$colors = array_values($colors);

echo "<h3>Llista després de array_values()</h3>";
echo "<table border='1'>";
echo "<tr><th>Clau</th><th>Color</th></tr>";

foreach ($colors as $clau => $valor) {
    echo "<tr>";
    echo "<td>" . $clau . "</td>";
    echo "<td>" . $valor . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<p>Nombre de colors: " . count($colors) . "</p>";
?>
