
<?php 

$servidor="localhost";
$baseDeDatos="app";
$usuario="root";
$contrasenia="";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    # code...
} catch (Exception $ex) {
    # code...
    echo $ex->getMessage();
}

?>