# Autor: Angel
# Data: 20/10/2026
# Llenguatge PHP
# --------


<?php
$importCompra = 150;

define("IMPORT_MINIM", 100);
define("PORCENTATGE_DESCOMPTE", 10);

if ($importCompra >= IMPORT_MINIM) {
    $descompte = $importCompra * PORCENTATGE_DESCOMPTE / 100;
} else {
    $descompte = 0;
}

$importFinal = $importCompra - $descompte;

echo "Import original: " . $importCompra . " €<br>";
echo "Descompte: " . $descompte . " €<br>";
echo "Import final: " . $importFinal . " €";
?>
