<?php
$titol = "La meva primera pàgina web";
$missatge = "Hola! Aquesta és la meva pàgina web en PHP.";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title><?php echo $titol; ?></title>
</head>
<body>
    <h1><?php echo $titol; ?></h1>
    <p><?php echo $missatge; ?></p>
</body>
</html>
