<?php

// Comprovo si el formulari s'envia amb post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Comprovo si s'ha seleccionat alguna afició
    if (isset($_POST["aficions"])) {

        echo "<h2>Les teves aficions són:</h2>";

        // Recorre totes les aficions seleccionades
        foreach ($_POST["aficions"] as $aficio) {
            echo htmlspecialchars($aficio) . "<br>";
        }

    // Si no s'ha seleccionat res, mostra el següent missatge
    } else {
        echo "No has seleccionat cap afició.";
    }

}

?>
