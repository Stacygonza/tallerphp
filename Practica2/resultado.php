<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parcial1 = $_POST["nota1"];
    $parcial2 = $_POST["nota2"];
    $parcial3 = $_POST["nota3"];
    $examen_final = $_POST["nota_final"];
    $trabajo_final = $_POST["trabajo_final"];

    // Pesos de cada componente
    $peso_parcial = 0.2; // Cada parcial vale 20%
    $peso_examen_final = 0.3; // Examen final vale 30%
    $peso_trabajo_final = 0.1; // Trabajo final vale 10%

    // Calcular la nota final
    $nota_final = ($parcial1 * $peso_parcial) + ($parcial2 * $peso_parcial) + 
                  ($parcial3 * $peso_parcial) + ($examen_final * $peso_examen_final) + 
                  ($trabajo_final * $peso_trabajo_final);

   // Verificar si aprobó o no
   $resultado = $nota_final >= 3 ? "Aprobó" : "No aprobó";

   echo "<h1>Tu nota final es: " . number_format($nota_final, 2) . "</h1>";
   echo "<h2>$resultado</h2>";
}
?>