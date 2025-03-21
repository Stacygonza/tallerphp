<?php include 'conexion.php';
if (isset($_GET['id']) && isset($_GET['cmd'])) {
    $documento = $_GET['id'];
    $cmd = $_GET['cmd'];
    switch ($cmd) {
        case 'update':
            $sql = "SELECT c.documento, c.nombre, c.apellido, c.ciudad_id, cd.nombre as ciudad, cd.dto_id, d.nombre as dto, c.activo
                    FROM clientes as c 
                    JOIN ciudades as cd ON c.ciudad_id = cd.id
                    JOIN departamentos as d ON d.id = cd.dto_id
                    WHERE c.documento = '$documento'";

            $resultado = mysqli_query($conexion, $sql);
            $data_form = mysqli_fetch_array($resultado);
            $data_form['cmd'] = 'update';
            $bnt_form = "Actualizar";
            break;
    }
} else {
    $bnt_form = "Registrar";
    $data_form = array('documento' => '', 'nombre' => '', 'apellido' => '', 'ciudad_id' => '', 'ciudad' => 1, 'dto_id'=> 1, 'dto'=> '', 'activo'=> 0, 'cmd' => 'new');
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

<body>
    <div class="form-container">
        <h2>Formulario de Usuario</h2>
        <form action="table_clientes.php" name="cliente" method="post">
            <input type="hidden" name="cmd" value="<?php echo $data_form['cmd']; ?>">
            <label for="documento">Documento:</label>
            <input type="text" id="documento" name="documento" required value="<?php echo $data_form['documento']; ?>">
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required value="<?php echo $data_form['nombre']; ?>">
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required value="<?php echo $data_form['apellido']; ?>">
            <br>
            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <div class="form-check
                ">
                    <input class="form-check
                    -input" type="radio" id="genero" name="activo" value="1" <?php if ($data_form['activo'] == 1) {
                                                                                    echo 'checked';
                                                                                } ?>>
                    <label class="form-check
                    -label" for="genero">Hombre</label>

                    <input class="form-check
                    -input" type="radio" id="genero" name="activo" value="0" <?php if ($data_form['activo'] == 0) {
                                                                                    echo 'checked';
                                                                                } ?>>
                    <label class="form-check
                    -label" for="genero">Mujer</label>
                </div>
            </div>
            <label for="ciudad">Departamento:</label>
            <select name="dto" id="dto">
                <option value="<?php echo $data_form['dto_id']; ?>"><?php echo $data_form['dto']; ?></option>
                <?php
                $sql = "SELECT * FROM departamentos";
                $resultado = mysqli_query($conexion, $sql);
                while ($data = mysqli_fetch_array($resultado)) {
                    echo '<option value="' . $data['id'] . '">' . $data['nombre'] . '</option>';
                }
                ?>
            </select>
            <label for="ciudad">Ciudad:</label>
            <select name="ciudad" id="ciudad">
                <option value="<?php echo $data_form['ciudad_id']; ?>"><?php echo $data_form['ciudad']; ?></option>
                <?php
                $sql = "SELECT * FROM ciudades";
                $resultado = mysqli_query($conexion, $sql);
                while ($data = mysqli_fetch_array($resultado)) {
                    echo '<option value="' . $data['id'] . '">' . $data['nombre'] . '</option>';
                }
                ?>
            </select>
            <br>
            <div class="buttons">
                <button class="button" type="submit" name="registro">
                    <?php echo $bnt_form; ?></button>
                <button class="button" type="button" onclick="window.location.href='table_clientes.php'">Cancelar</button>
            </div>
        </form>
    </div>

</body>

</html>