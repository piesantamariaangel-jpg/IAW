<?php
$materials = ["Llapis", "Paper", "Goma"];


echo "<h3>Llista inicial</h3>";
echo "<ul>";

foreach ($materials as $material) {
    echo "<li>" . $material . "</li>";
}

echo "</ul>";


$materials[1] = "Carpeta";


$materials[] = "Regle";

echo "<h3>Llista final</h3>";
echo "<ul>";

foreach ($materials as $material) {
    echo "<li>" . $material . "</li>";
}

echo "</ul>";

echo "<p>Total d'elements: " . count($materials) . "</p>";
?>
