<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Notas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f2;
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ff99cc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #ff66b2;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #ff66b2;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ff99cc;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #ff66b2;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #ff3385;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulario de Notas</h2>
        <form action="resultado.php" method="post">
            <div class="form-group">
                <label for="nota1">Nota 1:</label>
                <input type="number" id="nota1" name="nota1" required>
            </div>
            <div class="form-group">
                <label for="nota2">Nota 2:</label>
                <input type="number" id="nota2" name="nota2" required>
            </div>
            <div class="form-group">
                <label for="nota3">Nota 3:</label>
                <input type="number" id="nota3" name="nota3" required>
            </div>
            <div class="form-group">
                <label for="nota_final">Nota Final:</label>
                <input type="number" id="nota_final" name="nota_final" required>
            </div>
            <div class="form-group">
                <label for="trabajo_final">Trabajo Final:</label>
                <input type="number" id="trabajo_final" name="trabajo_final" required>
            </div>
            <div class="form-group">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>