# Autor: Angel
# Data: 20/10/2026
# Llenguatge PHP
# --------

<?php

const EDAT_INFANTIL = "12";
const EDAT_SENIOR = "65";
const PREU_ENTRADA = "8";

$edat = "74";

if ($edat < EDAT_INFANTIL || $edat >= EDAT_SENIOR) {
    echo "L'entrada es gratuïta";
} else {
    echo "L'entrada val 8 euros";
}

?>
