<?php

include 'conexion_wk.php';
 if (isset($_POST['submit']))
 {
  $nombre=$_POST['nombre_usu'];
$correo =$_POST['correo'];
$tipo_usu=$_POST['r1'];
$contrasena=$_POST['contra1'];
$contrasena2=$_POST['contra2'];
}




if (isset($_POST['submit']))
 {
if ($contrasena == $contrasena2) 

{

	$consulta=mysqli_query($conexion,"call sp_insertar_usuario('$nombre','$contrasena','$tipo_usu','$correo')");


if ($consulta>=1)

 {
	echo '<script> window.location.replace("index.php"); 


    </script>';
    exit;
}


}

{

echo '<script> alert ("Las contraseñas no coinciden");
    window.history.go(-1);

    </script>';
    exit;
}
}
?>