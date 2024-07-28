<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre=$_POST["nombre"];
$identificacion = $_POST['identificacion'];
$tipoId = $_POST['tipoId'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];

$sql="UPDATE clientes SET nombre='$nombre',identificacion='$identificacion', tipoId='$tipoId', email='$email', edad='$edad', telefono='$telefono' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>