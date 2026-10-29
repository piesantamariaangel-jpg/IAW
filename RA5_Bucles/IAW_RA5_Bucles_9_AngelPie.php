<?php
$notes = [4, 7.5, 5, 3, 9, 6];

const NOTA_APROVAT = 5;

$aprovats = 0;
$suspesos = 0;

echo "<table border='1'>";
echo "<tr><th>Nota</th><th>Resultat</th></tr>";

foreach ($notes as $nota) {
    if ($nota >= NOTA_APROVAT) {
        echo "<tr><td>$nota</td><td>Aprovat</td></tr>";
        $aprovats++;
    } else {
        echo "<tr><td>$nota</td><td>Suspès</td></tr>";
        $suspesos++;
    }
}

echo "</table>";

echo "<p>Total d'aprovats: $aprovats</p>";
echo "<p>Total de suspesos: $suspesos</p>";
?>
