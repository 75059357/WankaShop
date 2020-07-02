<?php
include 'conexion_wk.php';

$resultado=$conexion->query("Select * from tbl_local");



$consul_capa=mysqli_query($conexion, "SELECT fecha_reserva_inicio FROM tbl_vendedor");

foreach($consul_capa as $dato)
{

$dato['fecha_reserva_inicio'];

$fechas=$dato['fecha_reserva_inicio'];


}


date_default_timezone_set('America/Lima');
$fecha_actual = date("d-m-Y");
$fecha_convert=date("d-m-Y",strtotime($fecha_actual));
if(date("d-m-Y",strtotime($fechas))<$fecha_convert)
{

 $actua_capa=mysqli_query($conexion,"call sp_volver_capacidad()");

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

    <title>WankaShop</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php include 'maqueta/menu.inc' ?>
    <!-- fin menú -->

    <!-- vehiculos -->
    <div class="container">
      <div class="row">

       <?php
          foreach ($resultado as $dato) {
        ?>


        <div class="col-md-4 text-center mt-4">
         <img src="data:image/jpg;base64,<?php echo base64_encode($dato['fotografia']); ?>" class="img-fluid" >
       
         <label>Nombre de Local</label>
         
          <h5> <?php echo $dato['nomb_lcl']; ?> </h5>
          <label>Lugares disponibles </label>
          <h5> <?php echo $dato['num_vendedores']?></h5>
          <label>Precio por Alquiler</label>
          <h5> <?php echo $dato['precio_alqui']; ?>  </h5>
          <p> </p>
          <label>Ubicacion</label>
          <h5><?php echo $dato['ubicacion']; ?></h5>
          <a href="vendedor_selec_local.php?codigo=<?php echo $dato['id_locales']; ?>" class="btn btn-primary">Ver detalles</a>
        </div>

        
<?php
          }
        ?>
      </div>
    </div>
    <!-- fin vehiculos -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>