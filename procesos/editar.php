<?php
    require_once "../conexion.php";
    $obj = new Conectar();
    $conexion = $obj->conexion();
    $id = $_GET['id'];
    $sql = "SELECT nombre,semestre,creditos,carrera from t_materias where id='$id'";
    $result = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($result);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Actualizar</title>
</head>

<body>

<p class="fs-2 text-center mt-4" style="font-family: Calisto MT;">Actualizar</p>

<div class="container">
    <div class="row">
        <div class="col">
        <form action="actualizar.php" method="post">
        <input type="text" name="id" hidden="" value="<?php echo $id ?>">
        <label for="" class="mb-2 mt-2">Nombre</label>
        <input class="form-control" type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
        <label for="" class="mb-2 mt-2">Semestre</label>
        <select name="opcion" id="" class="form-select">
            <option selected value="<?php echo $ver[1] ?>"><?php echo $ver[1] ?></option>
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
        <label for="" class="mb-2 mt-2">Creditos</label>
        <input class="form-control" type="text" name="txtcreditos" value="<?php echo $ver[2] ?>">
        <label for="" class="mb-2 mt-2">Carrera</label>
        <select name="opcion2" id="" class="form-select">
            <option selected value="<?php echo $ver[3] ?>"><?php echo $ver[3] ?></option>
            <option value="1">sistemas</option>
            <option value="2">industrial</option>
            <option value="3">gestion</option>
        </select>
        <div class="d-grid gap-2 mt-2">
            <button class="btn btn-warning">actualizar</button>
        </div>
    </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>