<?php
include 'conexion_wk.php';

$usuario=$_POST["usuario"];

session_start();
$_SESSION['usuario']=$usuario;

$contrasena=$_POST["contrasena"];

$iniciosesion= " call sp_iniciar_sesion('$usuario','$contrasena')";

$resultado=mysqli_query($conexion , $iniciosesion);

$filas =mysqli_num_rows($resultado);

if ($filas>=1) 
{
	header ("location:index.php");
}

else
{
	
echo '<script> alert ("Usuario no registrado o los datos ingresados son incorrectos");
    window.history.go(-1);

    </script>';
    exit;

}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
