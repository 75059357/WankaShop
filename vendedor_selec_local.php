<?php
if (!isset($_GET["codigo"])) {
  exit();
}
$codigo = $_GET["codigo"];
include 'conexion_wk.php';

$sentencia = "select * from tbl_local where id_locales= '$codigo'";

$resultado= $conexion->query($sentencia);




?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    
    <title>Detalle de Local</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php include 'maqueta/menu.inc' ?>
    <!-- fin menú -->

    <!-- contenido detalle -->
    <div class="container">
      <div class="row">


        <?php 

  if ($resultado-> num_rows > 0) {
       while($row = $resultado->fetch_assoc()) 
       {
         
          $dato=$row;
        }
      

}

         ?>
        <div class="col-md-6">
          <img src="data:image/jpg;base64,<?php echo base64_encode($dato['fotografia']); ?>" class="img-fluid">
        </div>
        <div class="col-md-6 text-left">
          <br>
          <h5 >Nombre de Local:&nbsp&nbsp<?php echo $dato['nomb_lcl']; ?></h5>
        
          <h5>Ubicacion: &nbsp<?php echo  $dato['ubicacion']; ?></h6>
          <h5> Precio de Alquiler:&nbsp S/.<?php echo $dato['precio_alqui']; ?></h5>
          <h5> Lugares Disponibles:&nbsp <?php echo $dato['num_vendedores']; ?></h5>
          <h5>Capacidad Total:&nbsp <?php echo $dato['capacidad']; ?></h5>
          <h5>Medidas del Local: &nbsp<?php echo  $dato['medidas'] ?>;</h6>
          <h5>Tipo de Local: &nbsp<?php echo  $dato['tipo']; ?></h6>
          <h5> Servicios Basicos del Local:&nbsp <?php echo $dato['servicios']; ?></h5>
           <h5> Telefono del Local:&nbsp <?php echo $dato['telefono']; ?></h5>
            <h5> Email del Local:&nbsp <?php echo $dato['email_dueno']; ?></h5>
<a href="registrar_vendedor.php?codigo=<?php echo $dato['id_locales']; ?>" class="btn btn-danger center-block " onclick="validarCantidad">Registrarse en el Local</a>
        </div>
      </div>
    </div>
    <!-- fin detalle -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>