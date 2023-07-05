<?php
   
require_once ("qpromotor.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();
    
            break;

            case 'acceso_usuario';
            acceso_usuario();
            break;


		}

	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","qpromotor");
		extract($_POST);
		$consulta="UPDATE usuario SET nombres = '$nombres', apellido_paterno = '$apellidoP', apellido_materno = '$apellidoM', direccion = '$direccion', telefono = '$telefono', password ='$password' WHERE rut = '$rut' ";
		mysqli_query($conexion, $consulta);

		header('Location: ../Vista/editarUsuario.php');

    }

    function eliminar_registro() {
        $conexion=mysqli_connect("localhost","root","","qpromoto");
        extract($_POST);
        $rut= $_POST['rut'];
        $consulta= "DELETE FROM usuario WHERE rut= $rut";

        mysqli_query($conexion, $consulta);


        header('Location: ../Vista/Usuarios.php');
    }

    function acceso_usuario() {
        $rut=$_POST['rut'];
        $clave=$_POST['password'];
        session_start();
        $_SESSION['rut']=$rut;

        $conexion=mysqli_connect("localhost","root","","qpromotor");
        $consulta= "SELECT * FROM usuario WHERE rut='$rut' AND clave='$clave'";
        $resultado=mysqli_query($conexion, $consulta);
        $filas=mysqli_num_rows($resultado);

        if($filas){

            header('Location: ../Vista/Usuarios.php');

        }else{

            header('Location: ../Vista/index.php');
            session_destroy();

        }

  
    }
?>