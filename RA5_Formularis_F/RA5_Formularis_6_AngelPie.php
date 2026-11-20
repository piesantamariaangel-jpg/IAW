<!-- S'envian les dades a processar6.php -->
<form action="processar6.php" method="post">

    <!-- Etiqueta del menú desplegable -->
    <label for="ciutat">Ciutat d'origen:</label>

    <!-- Menú desplegable i opcions per seleccionar -->
    <select name="ciutat" id="ciutat">
        <option value="Barcelona">Barcelona</option>
        <option value="Girona">Girona</option>
        <option value="Tarragona">Tarragona</option>
        <option value="Madrid">Madrid</option>
        <option value="Valencia">València</option>
    </select>

    <br><br>

    <button type="submit">Enviar</button>

</form>
