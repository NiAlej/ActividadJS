<?php
$conexion= mysqli_connect("localhost", "root", "", "qpromotor");

if(isset($_POST['registrar'])){

    if(strlen($_POST['rut']) >=1 && strlen($_POST['password'])  >=1 ){

    $nombres = trim($_POST['nombres']);
    $apellidoP = trim($_POST['apellidoP']);
    $apellidoM = trim($_POST['apellidoM']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $rut = trim($_POST['rut']);
    $password = trim($_POST['password']);

    $consulta= "INSERT INTO usuario (rut, nombres, apellido_paterno, apellido_materno, direccion, telefono, clave)
    VALUES ('$rut', '$nombres','$apellidoP','$apellidoM','$direccion','$telefono','$rut' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: /Vista/Usuarios.php');
  }
}
?>