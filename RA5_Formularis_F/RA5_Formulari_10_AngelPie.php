<?php
// Valors inicials dels camps
$nom = $nom ?? "";
$email = $email ?? "";
$assumpte = $assumpte ?? "";
$missatge = $missatge ?? "";
?>

<!-- S'envien les dades a procesar10.php -->
<form action="processar10.php" method="post">

    <!-- Camp per introduïr el nom -->
    <label>Nom:</label><br>
    <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
    <br><br>

    <!-- Camp per introduïr el email -->
    <label>Email:</label><br>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <br><br>

   <!-- Camp per introduïr l'assumpte -->
    <label>Assumpte:</label><br>
    <input type="text" name="assumpte" value="<?php echo htmlspecialchars($assumpte); ?>">
    <br><br>

    <!-- Camp per introduïr el missatge -->
    <label>Missatge:</label><br>
    <textarea name="missatge"><?php echo htmlspecialchars($missatge); ?></textarea>
    <br><br>

    <!-- Botó per enviar el formulari -->
    <button type="submit">Enviar</button>

</form>
