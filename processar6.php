<?php

// Comprova si el formulari fa servir el metode post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guarda la ciutat seleccionada a una variable
    $ciutat = $_POST["ciutat"];

    echo "<h2>Ciutat seleccionada:</h2>";

    // Mostra la ciutat seleccionada
    echo htmlspecialchars($ciutat);

}

?>
