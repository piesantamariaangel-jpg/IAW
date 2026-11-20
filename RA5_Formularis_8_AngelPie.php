<?php
// Si les variables no existeixen, s'asignen amb un valor buit
$nom = $nom ?? "";
$correu = $correu ?? "";
$ciutat = $ciutat ?? "";
$error = $error ?? "";
?>

<!-- S'envien les dades a procesar8.php -->
<form action="processar8.php" method="post">

    <!-- Camp per introduïr el nom -->
    <label>Nom:</label>
    <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
    <br><br>

    <!-- Camp per introduïr el correu -->
    <label>Correu:</label>
    <input type="text" name="correu" value="<?php echo htmlspecialchars($correu); ?>">
    <br><br>

    <!-- Camp per introduïr la ciutat -->
    <label>Ciutat:</label>
    <input type="text" name="ciutat" value="<?php echo htmlspecialchars($ciutat); ?>">
    <br><br>

    <!-- Botó per enviar el formulari -->
    <button type="submit">Enviar</button>

</form>
