<?php
define("LIMIT", 10);

$suma = 0;

for ($i = 1; $i <= LIMIT; $i++) {
    $suma += $i;
}

echo "<p>La suma de l'1 a " . LIMIT . " és: " . $suma . "</p>";
?>
