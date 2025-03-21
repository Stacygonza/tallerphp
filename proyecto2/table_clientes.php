<?php include 'conexion.php';
if (isset($_GET["id"]) && isset($_GET['cmd'])) {
    $documento = $_GET['id'];
    $cmd = $_GET['cmd'];
    switch ($cmd) {
        case 'delete':
            //Confirmar si desea eliminar
            $sql = "DELETE FROM clientes WHERE documento = '$documento'";
            $resultado = mysqli_query($conexion, $sql);
            if ($resultado) {
                echo "Registro eliminado";
            }
            header("Location: table_clientes.php");
            break;
    }
} elseif (isset($_GET["search"]) && isset($_GET['btn'])) {
    $search = $_GET['search'];
    $btn = $_GET['btn'];
    if ($btn == "Buscar") {
        $sql = "SELECT c. activo, c.documento, c.nombre, c.apellido, c.ciudad_id, cd.nombre as ciudad, d.nombre as dto
                FROM clientes as c 
                JOIN ciudades as cd ON c.ciudad_id = cd.id
                JOIN departamentos as d ON d.id = cd.dto_id
                WHERE c.nombre LIKE '%$search%' OR c.apellido LIKE '%$search%'";
    } else {
        $sql = "SELECT c.documento, c.nombre, c.apellido, c.ciudad_id, cd.nombre as ciudad
                FROM clientes as c JOIN ciudades as cd ON c.ciudad_id = cd.id";
    }
    $resultado = mysqli_query($conexion, $sql);
} 
if (isset($_POST['registro'])) {
    print_r($_POST);
    $cmd = $_POST['cmd'];
    $activo = $_POST['activo'];
    $documento = (int) $_POST['documento'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ciudad_id = (int) $_POST['ciudad'];
    if ($cmd == "new") {
        $sql = "INSERT INTO clientes (documento, nombre, apellido, ciudad_id) VALUES ('$documento','$nombre', '$apellido', '$ciudad_id')";
    } else {
        $sql = "UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', ciudad_id = '$ciudad_id' WHERE documento='$documento'";
    }
    mysqli_query($conexion, $sql);
    print_r(mysqli_error($conexion));
    header("Location: table_clientes.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recaudos UP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<script>
    function confirmarEliminacion() {
        var respuesta = confirm("¡ Ultima oportunidad ! - Confirme que desea eliminar?");
        if (respuesta) {
            return true;
        } else {
            return false;
        }
    }
</script>

<body>
    <div class="container">
        <h2>Administrar clientes</h2>
        <div class="search-container">
            <form action="" method="get">
                <input type="text" name="search" placeholder="Buscar cliente...">
                <input type="submit" class="form-buttons" name="btn" value="Buscar">
                <input type="button" class="form-buttons" value="Nuevo" onclick="window.location.href='form_cliente.php'">
            </form>
        </div>
        <div class="table-container">
            <h2>Contenido</h2>
            <table>
                <thead>
                    <tr>
                        <th>Genero</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Ciudad y Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Las filas de clientes dinámicamente -->
                    <?php
                    if (!isset($resultado)) {
                        $sql = "SELECT c.activo, c.documento, c.nombre, c.apellido, c.ciudad_id, cd.nombre as ciudad, d.nombre as dto
                                FROM clientes as c 
                                JOIN ciudades as cd ON c.ciudad_id = cd.id
                                JOIN departamentos as d ON d.id = cd.dto_id";
                        $resultado = mysqli_query($conexion, $sql);
                    }
                    while ($fila = mysqli_fetch_array($resultado)) {
                        //$usuario = Usuario::crearDesdeFila($fila);
                        echo "<tr>";
                        echo "<td><img src='img/" . ($fila['activo'] == 0 ? 'fe' : '') . "male.png' width='40px' height='40px'></td>";
                        echo "<td>" . $fila['documento'] . "</td>";
                        echo "<td>" . $fila['nombre'] . "</td>";
                        echo "<td>" . $fila['apellido'] . "</td>";
                        echo "<td> " . $fila['ciudad'] . ' ' . $fila['dto'] . "</td>";
                        echo "<td class='crud-buttons'>
                            <a href='form_cliente.php?id=" . $fila['documento'] . "&cmd=update' class='update'><img src='img/imagen1.jpeg' width='20px' height='20px'>Editar</a>
                            <a href='table_clientes.php?id=" . $fila['documento'] . "&cmd=delete' class='delete'><img src='img/imagen2.jpeg' width='20px' height='20px'>Borrar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>