
<?php

// Comprova si el formulari fa servir post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Guarda les dades del formulari en variables
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $assumpte = $_POST["assumpte"];
    $missatge = $_POST["missatge"];

    // Array per guardar els errores
    $errors = [];

    // Comproba si algun camp està buit
    if ($nom == "" || $email == "" || $assumpte == "" || $missatge == "") {

        $errors[] = "Tots els camps són obligatoris.";

    }

    // Comproba si el email té un format coorecte
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "El correu electrònic no és vàlid.";

    }

    // Si hi han errors els mostra en vermell
    if (!empty($errors)) {

        foreach ($errors as $error) {

            echo "<p style='color:red;'>$error</p>";

        }

        // Torna a mostrar el formulari conservant les dades
        include "formulario10.php";

    } else {

        // Si no hi han errors mostra el missatge de confirmació
        echo "<h2>Formulari enviat correctament!</h2>";

        echo "Nom: " . htmlspecialchars($nom) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Assumpte: " . htmlspecialchars($assumpte) . "<br>";
        echo "Missatge: " . htmlspecialchars($missatge);

    }

}

?>
