# Autor: Angel
# Data: 20/10/2026
# Llenguatge PHP
# --------

<?php
$edat = 16;
$teAutoritzacio = true;

define("EDAT_MINIMA", 14);
define("EDAT_MAJORIA", 18);

if ($edat < EDAT_MINIMA) {
    echo "No pots participar perquè tens menys de 14 anys.";
} else {
    if ($edat >= EDAT_MAJORIA) {
        echo "Pots participar perquè ets major d'edat.";
    } else {
        if ($teAutoritzacio) {
            echo "Pots participar perquè tens autorització.";
        } else {
            echo "No pots participar perquè et falta l'autorització.";
        }
    }
}
?>