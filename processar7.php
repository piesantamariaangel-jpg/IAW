<?php

// Comprova si es fa servir post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guarda el genere seleccionat a una variable
    $genere = $_POST["genere"];

    // Mostra el títol
    echo "<h2>Gènere seleccionat:</h2>";

    // Mostra el gènere seleccionat
    echo htmlspecialchars($genere);

}

?>
