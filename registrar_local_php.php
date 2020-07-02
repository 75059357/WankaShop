 <?php
 include 'conexion_wk.php';
    $nombre_dueno = $_POST["txtNombre"];
   
    $dni_dueno = $_POST["txtDni"];
   
    $nomb_lcl =$_POST["txtnomblocl"];
    $ubi_local=$_POST["txtUbilcl"];
    $tipo_local=$_POST["txttipo"];
    $tamano_local=$_POST["txtTamano"];
   // $foto_local=$_POST["txtfoto"];
    $serv_local=$_POST["txtSerlcl"];
    $num_vendedor=$_POST["txtnumvend"];
    $precio_alq=$_POST["txtprealqui"];
    $capacidad=$num_vendedor;
    $telefono_cliente = $_POST["txtTelefono"];
    $correo_cliente = $_POST["txtEmail"];

$revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
}


$insertar=mysqli_query($conexion,"call sp_registrar_local

                       ('$nombre_dueno', 
                       
                        '$dni_dueno', 
                      
                        '$nomb_lcl',
                        '$ubi_local',
                        '$tipo_local',
                        '$tamano_local',
                        '$imgContenido',
                        '$serv_local',
                        '$num_vendedor',
                        '$capacidad',
                        '$precio_alq',
                        
                        '$telefono_cliente', 
                        '$correo_cliente')");
//ejecutar consulta


/*$verificar_local=mysqli_query($conexion, "SELECT * FROM tbl_local where nomb_lcl='$nomb_lcl'");
if (mysqli_num_rows($verificar_local) > 0 )
{
    echo '<script> alert ("El Local ya esta registrado");
    window.history.go(-1);

    </script>';
    exit;
}
*/
if ($insertar>=1)

 {
    header ("location:index.php");
}


else

{

echo ("Error");
}

//cerrar conexion

mysqli_close($conexion);    
?>