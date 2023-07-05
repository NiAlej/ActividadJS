<?php

session_start();
error_reporting(0);
	$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../Vista/index.php");
		die();
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3">
    <div class="alert alert-danger text-center">
    <p>¿Desea Eliminar del registro?</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="../Class/Crud.php" method="POST">
                <input type="hidden" name="accion" value="eliminar_registro">
                <input type="hidden" name="rut" value="<?php echo $_GET['rut']; ?>">
                <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                <a href="../Vista/Usuarios.php" class="btn btn-success">Cancelar</a>

                               
        </div>
    </div>



</body>
</html>