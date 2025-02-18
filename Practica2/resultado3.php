<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $peso = floatval($_POST["peso"]);
    $altura = floatval($_POST["estatura"]);

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);
        $categoria = "";

        if ($imc < 18.5) {
            $categoria = "Por debajo del peso";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $categoria = "Saludable";
        } elseif ($imc >= 25.0 && $imc <= 29.9) {
            $categoria = "Con sobrepeso";
        } elseif ($imc >= 30.0 && $imc <= 39.9) {
            $categoria = "Obeso";
        } else {
            $categoria = "Obesidad mórbida";
        }

        echo "<h3>Resultados para $nombre:</h3>";
        echo "IMC: " . number_format($imc, 2) . "<br>";
        echo "Categoría: $categoria";
    } else {
        echo "<p style='color:red;'>Por favor, ingrese valores válidos.</p>";
    }
}
?>