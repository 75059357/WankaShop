<?php
include 'conexion_wk.php';
if (!isset($_GET["codigo"]))
 {
  exit();
}
$codigo = $_GET["codigo"];
date_default_timezone_set('America/Lima');
$fecha_actual = date("d-m-Y");


$fecha_suma= date("d-m-Y",strtotime($fecha_actual."+ 1 days")); 

$veri_lugar=mysqli_query($conexion,"select num_vendedores from tbl_local where id_locales=$codigo");
foreach($veri_lugar as $lugar)
{

  $lugar['num_vendedores'];

$contador_dispo=$lugar['num_vendedores'];




}
if ($contador_dispo==0)
{

  echo '<script> alert ("Lo sentimos  no quedan lugares disponibles");
      window.history.go(-1);

    </script>';
    exit;
}
?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">


    

<script type="text/javascript">
    
/*a = 1;
function addproducto(){
        a++;

        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
            div.innerHTML = '<div  class="producto_'+a+' col-md-offset-2 col-md-4 mb-3 "><label>Nombre de Producto</label><input class="form-control" name="NombreProducto[]_'+a+'" type="text"/></div><div class="producto_'+a+' col-md-4 mb-3 ""><label>Precio</label><input class="form-control" name="precioProducto[]_'+a+'" type="text"/></div><div class="producto_'+a+' col-md-4 mb-3"><label>Cantidad</label><input class="form-control" name="cantidadProducto[]_'+a+'" type="text"/></div>';
            document.getElementById('productos').appendChild(div);document.getElementById('productos').appendChild(div);
}*/







</script>

    <title>WankaShop-Registrar Vendedor</title>
  </head>
  <body>
<p id="actual"></p>
    <?php include 'maqueta/menu.inc' ?>
     
  
    <form enctype="multipart/form-data" class="container" action="regis_vende_prophp.php" method="post">

        <h3> Registro de Vendedor</h3>
<input type="hidden" name="txtcodigo" value="<?php echo $codigo?>">

  <div class="form-row" >
    <div class="col-md-4 mb-3">
      
      <label for="validationDefault01">Nombres y Apellidos del Vendedor</label>
      <input type="text" class="form-control" name="txtNombre" id="validationDefault01" value="" required>
    </div>
    <div class="col-md-3 mb-3">
      <label >N° DNI </label>
      <input type="text" class="form-control" name="txtDni"   required>
  
  </div>
  
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Rubro de ventas</label>
      <input type="text" class="form-control"name="txtrubro"  id="validationDefault03" required>
    </div>

    <div class=" col-md-4 mb-3" >
       <label for="validationDefault01"> Fecha de Reserva</label>
       
     <input type="text" name="txtfechas" class="form-control"  value="<?php echo $fecha_suma ?>" readonly> 
    </div>  
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Email</label>
      <input type="text" class="form-control" name="txtemail" id="validationDefault03" required>
    </div>

   <!--Numero de Comprobante y usuario-->
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Telefono</label>
      <input type="text" class="form-control"name="txttelefono"  id="validationDefault05" required>
    </div>
  

  </div>

<button class="boton"class="btn btn-alert" type="submit" method="POST">Registrarse</button>

</form>
 <!--<h3>Registrar Productos a Vender</h3>



   
   
    <div class="form-row">
        
    
   
        <div class="col-md-2.4 mb-4"><label>&nbsp&nbsp&nbspNombre de Producto</label>
        <input class="form-control" name="NombreProducto[]_" type="text"/>
        </div>
        <div class="col-md-2.4 mb-4" ><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPrecio</label>
         <input class="form-control" name="precioProducto[]" type="text"/>
         </div>
        <div class="col-md-2.4 mb-4"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCantidad</label>
         <input class="form-control" name="cantidadProducto[]" type="text"/>
         </div>
        <div ><input type="button" class="btn btn-success" id="addproducto()" onClick="addproducto()" value="+" /></div>
    
     El id="canciones" indica que la función de JavaScript dejará aquí el resultado 
    <div class="row" id="productos">
    </div>
    </div>

-->

    <!-- fin vehiculos -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>