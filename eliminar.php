<?php
include "connection.php";
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
                            <a class="nav-link" aria-current="page" href="http://localhost/CRUD-modulo-clientes/CRUD-modulo-clientes/crear.php#">Crear
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
    <div class="clients-table">
        <h2>Eliminar clientes</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Identificación</th>
                    <th>tipoId</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><a><?= $row['id'] ?></a></th>
                        <th><a><?= $row['nombre'] ?></a></th>
                        <th><a><?= $row['identificacion'] ?></a></th>
                        <th><a><?= $row['tipoId'] ?></a></th>
                        <th><a><?= $row['email'] ?></a></th>
                        <th><a><?= $row['edad'] ?></a></th>
                        <th><a><?= $row['telefono'] ?></a></th>
                        <th><a href="delete_client.php?id=<?= $row['id'] ?>"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
   
</body>

</html>