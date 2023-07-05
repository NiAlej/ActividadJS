<?php

$rut= $_GET['rut'];
$conexion= mysqli_connect("localhost", "root", "", "qpromotor");
$consulta= "SELECT * FROM usuario WHERE rut = $rut";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);

?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<form  action="../Class/Crud.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                            <label for="nombres" class="form-label">Nombres*: </label>
                            <input type="text"  id="nombres" name="nombres" class="form-control" value="<?php echo $usuario['nombres'];?>"required>
                            </div>
                            <div class="form-group">
                                <label for="apellidoP">Apellido Paterno:</label><br>
                                <input type="text" name="apellidoP" id="apellidoP" class="form-control" placeholder="" value="<?php echo $usuario['apellidoP'];?>">
                            </div>
                            <div class="form-group">
                                <label for="apellidoM">Apellido Materno:</label><br>
                                <input type="text" name="apellidoM" id="apellidoM" class="form-control" placeholder="" value="<?php echo $usuario['apellidoM'];?>">
                            </div>
                            <div class="form-group">
                            <label for="direccion" class="form-label">Direccion: </label>
                            <input type="text"  id="direccion" name="direccion" class="form-control"value="<?php echo $usuario['direccion'];?>">
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono *</label>
                                <input type="tel"  id="telefono" name="telefono" class="form-control" value="<?php echo $usuario['telefono'];?>" required>  
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario['password'];?>" required>
                                <input type="hidden" name="accion" value="editar_registro">
                            </div>
                           <br>
                                <button type="submit" class="btn btn-success" >Editar</button>
                                <a href="/Vista/Usuarios.php" class="btn btn-danger">Cancelar</a>
                            </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>