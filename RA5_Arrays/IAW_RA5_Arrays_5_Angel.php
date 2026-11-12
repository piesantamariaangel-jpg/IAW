<?php

$contacte = [
    "nom" => "Pol",
    "telefon" => null
];


echo "<h2>Telefon</h2>";


if (array_key_exists("telefon", $contacte)) {
    echo "<p>array_key_exists: La clau telefon existeix.</p>";
} else {
    echo "<p>array_key_exists: La clau telefon NO existeix.</p>";
}


if (isset($contacte["telefon"])) {
    echo "<p>isset: El telefon existeix i no és null.</p>";
} else {
    echo "<p>isset: El telefon no existeix o és null.</p>";
}



echo "<h2>Email</h2>";

if (array_key_exists("email", $contacte)) {
    echo "<p>array_key_exists: La clau email existeix.</p>";
} else {
    echo "<p>array_key_exists: La clau email NO existeix.</p>";
}


if (isset($contacte["email"])) {
    echo "<p>isset: L'email existeix i no és null.</p>";
} else {
    echo "<p>isset: L'email no existeix o és null.</p>";
}

?>
