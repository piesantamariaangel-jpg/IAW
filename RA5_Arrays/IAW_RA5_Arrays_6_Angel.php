<?php

$preus = [
    "Llibreta" => 3.50,
    "Bolígraf" => 1.20,
    "Carpeta" => 2.80,
    "Regle" => 1.50
];

$total = 0;
$comptador = 0;

echo "<h2>Preus de la papereria</h2>";

echo "<table border='1'>";
echo "<tr><th>Article</th><th>Preu (€)</th></tr>";

foreach ($preus as $article => $preu) {

    echo "<tr>";
    echo "<td>" . $article . "</td>";
    echo "<td>" . number_format($preu, 2, ",", ".") . " €</td>";
    echo "</tr>";

    $total += $preu;

    if ($preu >= 2) {
        $comptador++;
    }
}

echo "</table>";

echo "<p><strong>Total de la compra: "
    . number_format($total, 2, ",", ".") . " €</strong></p>";

echo "<p>Articles amb preu igual o superior a 2 €: "
    . $comptador . "</p>";

?>
