<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Comprova si s'ha enviat el formulari amb el metode post

    // Guarda les dades del formulari en variables
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $missatge = $_POST["missatge"];

    // Si la condició es cumpleix entra al if, el if comproba si el camp està vuit
    if ($nom == "" || $correu == "" || $missatge == "") {

        echo "Error: Tots els camps són obligatoris.";

    // Si ningun camp està buit mostra les dades
    } else {

        echo "<h2>Dades rebudes:</h2>";
        echo "Nom: " . htmlspecialchars($nom) . "<br>";
        echo "Correu: " . htmlspecialchars($correu) . "<br>";
        echo "Missatge: " . htmlspecialchars($missatge);

    }

}

?>
