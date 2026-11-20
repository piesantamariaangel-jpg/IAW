<form action="processar5.php" method="post"> <!-- L'informació s'envia a l'arxiu processar5.php -->

    <label>Aficions:</label><br> <!-- Creo el camp Aficions -->

    <!-- Creo les caselles de seleció de les opcions -->
    <input type="checkbox" name="aficions[]" value="Esport"> Esport<br>
    <input type="checkbox" name="aficions[]" value="Musica"> Música<br>
    <input type="checkbox" name="aficions[]" value="Llegir"> Llegir<br>
    <input type="checkbox" name="aficions[]" value="Videojocs"> Videojocs<br>

    <br>
    <button type="submit">Enviar</button> <!-- Creo el botó d'enviament del formulari -->

</form>
