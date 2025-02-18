<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Crédito</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #ff4500;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #ff4500;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #ff6347;
        }
    </style>
</head>
<body>
    <h1>Solicitud de Crédito</h1>
    <form action="amortizacion.php" method="post">
        <label for="cedula">Cédula del Cliente:</label>
        <input type="text" id="cedula" name="cedula" required>

        <label for="nombre">Nombre del Cliente:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="monto">Monto del Crédito:</label>
        <input type="number" id="monto" name="monto" required>

        <label for="tasa">Tasa de Interés Mensual (%):</label>
        <input type="number" step="0.01" id="tasa" name="interesAnual" required>

        <label for="plazo">Plazo en Meses:</label>
        <input type="number" id="plazo" name="plazo" required>

        <input type="submit" value="Solicitar Crédito">
    </form>
</body>
</html>