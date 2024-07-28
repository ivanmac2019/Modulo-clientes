<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$identificacion = $_POST['identificacion'];
$tipoId = $_POST['tipoId'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO clientes VALUES('$id','$nombre','$identificacion','$tipoId','$email','$edad','$telefono')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>