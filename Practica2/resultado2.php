<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vendedor = $_POST["nombre"];
    $cantidad = $_POST["cantidad"];
    $totalVentas = $_POST["precio"];

    $salarioBase = 737000;
    $comisionPorAuto = 50000;
    $comisionPorVenta = 0.05 * $totalVentas;

    $salarioFinal = $salarioBase + ($cantidad * $comisionPorAuto) + $comisionPorVenta;

    echo '<div class="resultado">';
    echo "<h2>Resultado:</h2>";
    echo "Nombre del vendedor: $vendedor <br>";
    echo "Salario final: $" . number_format($salarioFinal, 0, ',', '.');
    echo '</div>';
}
?>                   