
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body id="page-top">


<form  action="../Class/Nuevo.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                            <br>
                            <br>
                            <h3 class="text-center">Ingreso de Nuevo Usuario</h3>
                            <div class="form-group">
                                <label for="rut">Rut*: </label><br>
                                <input type="rut" name="rut" id="rut" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="nombre" class="form-label">Nombres*: </label>
                            <input type="text"  id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="apellidoP" class="form-label">Apellido Paterno*: </label>
                            <input type="text"  id="apellidoP" name="apellidoP" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="apellidoM" class="form-label">Apellido materno*: </label>
                            <input type="text"  id="apellidoM" name="apellidoM" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="direccion" class="form-label">Direccion: </label>
                            <input type="text"  id="direccion" name="direccion" class="form-control">
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono: </label>
                                <input type="tel"  id="telefono" name="telefono" class="form-control"> 
                            </div>
                            <div class="form-group">
                                <label for="password">Clave*: </label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                           <br>
                           <div class="mb-3">
                               <input type="submit" value="Guardar" class="btn btn-success" name="registrar">
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