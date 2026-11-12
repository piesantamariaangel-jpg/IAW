<?php

$productes = [
    "P01" => ["nom" => "Teclat", "preu" => 25, "estoc" => 4],
    "P02" => ["nom" => "Ratolí", "preu" => 12, "estoc" => 0],
    "P03" => ["nom" => "Monitor", "preu" => 150, "estoc" => 2]
];

echo $productes["P02"]["nom"] . "<br>";
echo $productes["P02"]["preu"] . "<br>";
echo $productes["P02"]["estoc"] = 3;

$productes["P04"] = ["nom" => "Cable", "preu" => "8", "estoc" => "5"];

echo "<table border='1'>";
echo "<tr>
        <th>Codi</th>
        <th>Nom</th>
        <th>Preu</th>
        <th>Estoc</th>
        <th>Valor</th>
      </tr>";

foreach ($productes as $codi => $producte) {

    $valor = $producte["preu"] * $producte["estoc"];

    echo "<tr>";
    echo "<td>$codi</td>";
    echo "<td>" . $producte["nom"] . "</td>";
    echo "<td>" . $producte["preu"] . " €</td>";
    echo "<td>" . $producte["estoc"] . "</td>";
    echo "<td>" . $valor . " €</td>";
    echo "</tr>";
}

echo "</table>";

$total = 0;

foreach ($productes as $producte) {
    $valor = $producte["preu"] * $producte["estoc"];
    $total = $total + $valor;
}

echo "<h3>Valor total del inventari: " . $total . " €</h3>";

?>
