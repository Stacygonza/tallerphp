<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="formulario.php" name="formulario_contacto" method="post">
        <input type="text" placeholder="Nombre:" name="nombre" id="nombre">
        <input type="text" placeholder="Edad:" name="edad" id="edad">
        <br>

<!-- Radio Button -->
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" id="hombre" value="hombre">
        <br>

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" id="mujer" value="mujer">
        <br>

<!-- Combobox -->
        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>

<!-- Checkbox --> 
        <label for="terminos">Terminos y Condiciones</label>
        <input type="checkbox" name="terminos" value="ok" id="terminos">
        <br>

        <input type="submit" name="btn-enviar" value="Enviar">
    </form>
</body>
</html>