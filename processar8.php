<?php

// comprova si es fa servir POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guarda les dades introduïdes en variables
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $ciutat = $_POST["ciutat"];

    // Comproba si algun camp està buit
    if ($nom == "" || $correu == "" || $ciutat == "") {

        // Guarda el missatge d'error
        $error = "Error: Tots els camps són obligatoris.";

        // Mostra el error
        echo "<p style='color:red;'>$error</p>";

        // torna a mostrar el formulari
        include "formulario8.php";

    } else {

        // Si tot es correcte, mostra les dades
        echo "<h2>Dades rebudes:</h2>";

        echo "Nom: " . htmlspecialchars($nom) . "<br>";
        echo "Correu: " . htmlspecialchars($correu) . "<br>";
        echo "Ciutat: " . htmlspecialchars($ciutat);

    }

}

?>