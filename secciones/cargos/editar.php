<?php
include("../../bd.php");
// Verifica si se ha pasado un parámetro 'txtID' a través de GET
if (isset($_GET['txtID'])) {
    $txtID = isset($_GET['txtID']) ? $_GET['txtID'] : "";
    $sentencia = $conexion->prepare("SELECT * FROM tbl_cargos WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
    $nombrecargo = $registro["nombrecargo"];
}

// Verifica si se ha enviado un formulario mediante POST
if (isset($_POST['txtID']) && isset($_POST["nombrecargo"])) {
    $txtID = $_POST['txtID'];
    $nombrecargo = $_POST["nombrecargo"];
    // Prepara una consulta para actualizar el nombre del cargo en la tabla
    $sentencia = $conexion->prepare("UPDATE tbl_cargos SET nombrecargo=:nombrecargo WHERE id=:id");
    $sentencia->bindParam(':nombrecargo', $nombrecargo);
    $sentencia->bindParam(":id", $txtID);
    // Ejecuta la consulta de actualización
    $sentencia->execute();
    header("Location:index.php");
}

?>
<?php include("../../templates/header.php"); ?>

<br />
<div class="card">
    <div class="card-header">Cargos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text" value="<?php echo $txtID; ?>" class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID" />
            </div>
            <div class="mb-3">
                <label for="nombrecargo" class="form-label">Nombre del cargo:</label>
                <input type="text" value="<?php echo $nombrecargo; ?>" class="form-control" name="nombrecargo" id="nombrecargo" aria-describedby="helpId" placeholder="Nombre del cargo" />
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include("../../templates/footer.php"); ?>