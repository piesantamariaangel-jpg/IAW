# Autor: Angel
# Data: 20/10/2026
# Llenguatge PHP
# --------

<?php
$a = 10;
$b = 5;
$operacio = "*";

switch ($operacio) {
    case "+":
        echo "Resultat: " . ($a + $b);
        break;

    case "-":
        echo "Resultat: " . ($a - $b);
        break;

    case "*":
        echo "Resultat: " . ($a * $b);
        break;

    case "/":
        if ($b == 0) {
            echo "No es pot dividir entre zero";
        } else {
            echo "Resultat: " . ($a / $b);
        }
        break;

    default:
        echo "Operació no vàlida";
        break;
}
?>
