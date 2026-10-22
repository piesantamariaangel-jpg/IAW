# Autor: Angel
# Data: 20/10/2026
# Llenguatge PHP
# --------

<?php

const LIMIT_FRED = 15;
const LIMIT_CALOR = 25;

$temperatura = 20;

if ($temperatura < LIMIT_FRED) {
    echo "Fa fred";
} elseif ($temperatura <= LIMIT_CALOR) {
    echo "La temperatura és agradable";
} else {
    echo "Fa calor";
}