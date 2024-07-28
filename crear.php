<?php
include ("connection.php");
$con = connection();

$sql = "SELECT * FROM clientes";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Clientes CRUD</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="http://localhost/CRUD-modulo-clientes/CRUD-modulo-clientes/index.php#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="http://localhost/CRUD-modulo-clientes/CRUD-modulo-clientes/listado.php#">Listado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="http://localhost/CRUD-modulo-clientes/CRUD-modulo-clientes/crear.php#">Crear
                                cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="http://localhost/CRUD-modulo-clientes/CRUD-modulo-clientes/editar.php?id=1">Editar
                                cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="http://localhost/CRUD-modulo-clientes/CRUD-modulo-clientes/eliminar.php?id=1">Eliminar
                                cliente</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    <div class="clients-form">
        <h1>Crear Cliente</h1>
        <form action="insert_client.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="identificacion" placeholder="Numero de identificación">
            
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Seleccione su tipo de identificación:</label>
                <select name="tipoId" id="disabledSelect" class="form-select">
                    <option>Registro civil</option>
                    <option>Tarjeta de identidad</option>
                    <option>Cedula de ciudadania</option>
                    <option>Tarjeta de extranjeria</option>
                    <option>Cedula de extranjeria</option>
                    <option>NIT</option>
                    <option>Pasaporte</option>
                    <option>Documento de identificación extranjero</option>
                    <option>PEP</option>
                </select>
            </div>
            <input type="email" name="email" placeholder="Correo electronico">
            <input type="text" name="edad" placeholder="Edad">
            <input type="text" name="telefono" placeholder="Numero de telefono">
            <input type="submit" value="Agregar">
        </form>
    </div>


</body>

</html>