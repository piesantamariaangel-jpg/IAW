# Autor: Angel
# Data: 20/10/2026
# Llenguatge PHP
# --------

<?php

const USUARI_CORRECTE = "alumne";
const CONTRASENYA_CORRECTA = "php123";

$usuari = "alumne";
$contrasenya = "php123";

if ($usuari === USUARI_CORRECTE && $contrasenya === CONTRASENYA_CORRECTA) {
    echo "Accés permès";
} else {
    echo "Accés denegat";
}

?>