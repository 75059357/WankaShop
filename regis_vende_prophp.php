<?php

include 'conexion_wk.php';

//vendedor
$nombre_vende=$_POST["txtNombre"];
$vende_dni=$_POST['txtDni'];
$rubro=$_POST['txtrubro'];
$email=$_POST['txtemail'];
$telefono=$_POST['txttelefono'];
$fechareserva=$_POST['txtfechas'];
$codigos= $_POST['txtcodigo'];









/*$veri_lugar=mysqli_query($conexion,"select num_vendedores from tbl_local where id_locales='$codigos'");


foreach($veri_lugar as $lugar)
{

  $lugar['num_vendedores'];

$contador_dispo=$lugar['num_vendedores'];




}
if ($contador_dispo==0)
{

  echo '<script> alert ("Ya no quedan lugares disponibles");
    

    </script>';
    exit;
}*/






$verificar_vende=mysqli_query($conexion, "SELECT * FROM tbl_vendedor where dni_vendedor=$vende_dni");

 
if (mysqli_num_rows($verificar_vende) > 0 )
{
    echo '<script> alert ("Usted ya esta registrado");
    window.history.go(-1);

    </script>';
    exit;
}




$consul_compro= mysqli_query($conexion,"SELECT Num_comprobante from tbl_comprobante where Num_comprobante = (SELECT MAX(Num_comprobante) FROM tbl_comprobante)");

 if ($row = mysqli_fetch_row($consul_compro)) 
 {
   $id = trim($row[0]+1);
   
 }
$registrar_compro= mysqli_query($conexion,"call sp_registrar_comprobante($id)");
$insertar_vendedor=mysqli_query($conexion,"call sp_registrar_vendedor


						('$nombre_vende',
						'$vende_dni',
						'$rubro',
						'$email',
						'$telefono',
						'$fechareserva',
						'$codigos',
						'$id'
						 )");






//disminuir numero de lugares disponibles en un local

$disminuir_capacidad=mysqli_query($conexion,"select num_vendedores from tbl_local where id_locales=$codigos");

if ($resul = mysqli_fetch_row($disminuir_capacidad)) 
 {
   $dism = trim($resul[0]);
   $reducir_capa=$dism-1;
   
 }


$actualizar_capacidad=mysqli_query($conexion,"call sp_actualizar_capacidad('$codigos','$reducir_capa')");


if($insertar_vendedor>=1)

{
    header ("location:imprimir_boleta.php");
}


else

{

echo ("Error");
}


mysqli_close($conexion);  

?>