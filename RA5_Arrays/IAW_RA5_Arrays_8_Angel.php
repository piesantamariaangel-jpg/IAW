<?php

$alumnes = [
    ["nom" => "Mar", "nota" => 7],
    ["nom" => "Pol", "nota" => 4],
    ["nom" => "Aina", "nota" => 9],
    ["nom" => "Nil", "nota" => 5]
];

const NOTA_APROVAT = 5;


$total_notes = 0;
$aprovats = 0;
$suspesos = 0;

if (count($alumnes) > 0) {

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Nota</th>";
    echo "<th>Resultat</th>";
    echo "</tr>";

    foreach ($alumnes as $alumne) {

        if ($alumne["nota"] >= NOTA_APROVAT) {
            $resultat = "Aprovat";
            $aprovats++;
        } else {
            $resultat = "Suspès";
            $suspesos++;
        }

        $total_notes += $alumne["nota"];

        echo "<tr>";
        echo "<td>" . $alumne["nom"] . "</td>";
        echo "<td>" . $alumne["nota"] . "</td>";
        echo "<td>" . $resultat . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    $mitjana = $total_notes / count($alumnes);

    echo "<p>Mitjana: " . $mitjana . "</p>";
    echo "<p>Aprovats: " . $aprovats . "</p>";
    echo "<p>Suspesos: " . $suspesos . "</p>";

} else {
    echo "No hi ha alumnes";
}

?>
