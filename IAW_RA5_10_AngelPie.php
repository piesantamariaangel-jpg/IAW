<?php
$nom = "Angel";
$data = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>La meva targeta personal</title>
</head>
<body>
    <div style="border: 2px solid blue;
                width: 300px;
                padding: 20px;
                text-align: center;">
        <h1><?php echo $nom; ?></h1>
        <img src="C:\Users\alum6\Downloads"
             alt="La meva imatge"
             width="150">
        <p>Data actual: <?php echo $data; ?></p>
        <p>
            Benvingut/da a la meva targeta personal,
            <?php echo $nom; ?>!
        </p>
    </div>
</body>
</html>
