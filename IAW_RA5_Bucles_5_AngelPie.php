
<?php
$nombre = 7;

echo "<table border='1'>";
echo "<tr><th>Operació</th><th>Resultat</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;

    echo "<tr>";
    echo "<td>$nombre × $i</td>";
    echo "<td>$resultat</td>";
    echo "</tr>";
}

echo "</table>";
?>
