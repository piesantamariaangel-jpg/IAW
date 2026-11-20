<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correu = $_POST["correu"];

    // Comprova i filtre les dades, en aquest cas $correu es el valor que volem comprobar
    if (filter_var($correu, FILTER_VALIDATE_EMAIL)) { // Comprova si el format de correu és vàlid

        // Si el correu no es vàlid, mostra el següent missatge
        echo "El correu electrònic és vàlid.";

    } else { // Si es vàlid, mostra el següent missatge

        echo "Error: El correu electrònic no és vàlid.";

    }

}

?>