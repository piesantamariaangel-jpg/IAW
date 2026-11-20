<?php

// Comproba si el formulari fa servir POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guarda el comentari amb una variable
    $comentari = $_POST["comentari"];

    // Comproba que el comentari no està buit
    if ($comentari == "") {

        echo "Has d'escriure un comentari.";

    } else {

        // Mostra el comentari de forma segura
        // htmlspecialchars evita que s'interpreti com HTML
        echo "<h2>El teu comentari:</h2>";

        echo htmlspecialchars($comentari);

    }

}

?>
