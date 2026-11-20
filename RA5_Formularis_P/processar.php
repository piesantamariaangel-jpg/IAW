<?php
$nom = $_POST["nom"]; // Recull el nom en una variable
echo "<h1>Benvingut/da, " . htmlspecialchars($nom) . "!</h1>"; // Guarda el nom introduït en una variable
echo "<p>Has enviat el formulari correctament.</p>"; // Mostra el missatge de benvinguda
?> 

