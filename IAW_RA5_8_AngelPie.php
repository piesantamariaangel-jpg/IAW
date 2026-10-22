<?php
$a = 10;
$b = 20;

// Mostrar els valors inicials
echo "Abans de l'intercanvi:<br>";
echo "A = " . $a . "<br>";
echo "B = " . $b . "<br>";

// Intercanviar els valors
$temporal = $a;
$a = $b;
$b = $temporal;

// Mostrar els valors finals
echo "<br>Després de l'intercanvi:<br>";
echo "A = " . $a . "<br>";
echo "B = " . $b;
?>