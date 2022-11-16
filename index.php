<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Materias</title>
</head>

<body>
    <p class="fs-2 text-center mt-4" style="font-family: Calisto MT;">Materias</p>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="procesos/insertar.php" method="post">
                    <label for="" class="mb-2 mt-2">Nombre</label>
                    <input type="text" name="txtnombre" class="form-control" placeholder="nombre">
                    <label for="" class="mb-2 mt-2">Creditos</label>
                    <input type="text" name="txtcreditos" class="form-control" placeholder="creditos (10 digitos)">
                    <label for="" class="mb-2 mt-2">Semestre</label>
                    <select name="opcion" id="" class="form-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <label for="" class="mb-2 mt-2">Carrera</label>
                    <select name="opcion2" id="" class="form-select">
                        <option value="1">sistemas</option>
                        <option value="2">industrial</option>
                        <option value="3">gestion</option>
                    </select>

                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary">agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container mt-4 ">
        <div class="row">
            <div class="col">
                <table class="table table-striped text-center">
                    <tr>
                        <td>Nombre</td>
                        <td>Semestre</td>
                        <td>Creditos</td>
                        <td>Carrera</td>
                        <td>Actualizar</td>
                        <td>Eliminar</td>
                    </tr>

                    <?php
                    $obj = new metodos();
                    $sql = "SELECT id,nombre,semestre,creditos,carrera from t_materias";
                    $datos = $obj->mostrarDatos($sql);

                    foreach ($datos as $key){
                    ?>

                    <tr>
                        <td><?php echo $key['nombre']; ?></td>
                        <td><?php echo $key['semestre']; ?></td>
                        <td><?php echo $key['creditos']; ?></td>
                        <td><?php echo $key['carrera']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="procesos/editar.php?id=<?php echo $key['id'] ?>">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a>
                        </td>
                    </tr>

                    <?php
                     }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>