<?php

echo "<h1>Hola món!</h1>";

// Dades de connexió a la base de dades
$host = 'db';
$usuari = 'usuari';
$contrasenya = 'contrasenya';
$db = 'example';

// Connexió a la base de dades
$connexio = mysqli_connect($host, $usuari, $contrasenya, $db);

// Comprovació
if (!$connexio) {
    die("<p style='color:red;'>Error de connexió: " . mysqli_connect_error() . "</p>");
} else {
    echo "<p style='color:green;'>Connectat a la base de dades correctament!</p>";
}

?>
