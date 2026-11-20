<?php

if (isset($_GET["nom"]) && isset($_GET["edat"])) { // Comproba que les variables existeixen

    $nom = $_GET["nom"]; // Guarda el nom en una variable
    $edat = $_GET["edat"]; // Guarda l'edat en una variable

    echo "<h2>Hola, " . htmlspecialchars($nom) . "!</h2>";
    echo "<p>Tens " . htmlspecialchars($edat) . " anys.</p>";

}

?>