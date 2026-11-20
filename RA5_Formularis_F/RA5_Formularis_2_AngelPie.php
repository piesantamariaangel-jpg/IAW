<form action="processar2.php" method="get"> <!-- indica que les dades es guarden al fitxer processar2 -->

    <label for="nom">Nom:</label> <!-- Crea el camp nom -->
    <input type="text" id="nom" name="nom" required>

    <label for="edat">Edat:</label> <!-- Crea el camp edat -->
    <input type="number" id="edat" name="edat" required>

    <button type="submit">Enviar</button> <!-- Crea el botó d'enviament del formulari -->

</form>
