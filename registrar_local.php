<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">


    <style type="text/css">
      
      .boton


{

height:50px; 
    width:120px; 
    margin: 5px -50px; 
    position:relative;
    top:50%; 
    left:50%;
    
    color:black;
    font:bold;
    background-color: skyblue;
    cursor: pointer;


}
    </style>
    <title>WankaShop</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php include 'maqueta/menu.inc' ?>
    <!-- fin menú -->
    <br>
    <br>
    <form enctype="multipart/form-data" class="container" action="registrar_local_php.php" method="post">
  <div class="form-row" >
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombres y Apellidos del Dueño del Local</label>
      <input type="text" class="form-control" name="txtNombre" id="validationDefault01" value="" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault01">N° DNI </label>
      <input type="text" class="form-control" name="txtDni" id="validationDefault02" value="" required>
  
  </div>
  
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombre de Local</label>
      <input type="text" class="form-control"name="txtnomblocl"  id="validationDefault03" required>
    </div>

    
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Ubicación del Local</label>
      <input type="text" class="form-control" name="txtUbilcl" id="validationDefault03" required>
    </div>

    <!--<div class="col-md-3 mb-3">
      <label for="validationDefault04">Ubicación del Local</label>
      <select class="custom-select" id="validationDefault04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
    </div>-->
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Tipo de Local</label>
      <input type="text" class="form-control"name="txttipo"  id="validationDefault05" required>
    </div>
  <div class="col-md-3 mb-3">
      <label for="validationDefault05">Medidas del  Local</label>
      <input type="text" class="form-control" name="txtTamano"  required>
    </div>
  <div class="col-md-4 mb-3">
      <label for="validationDefault05">Fotos del  Local</label>
      <input type="file" class="form-control" name="image" id="image" multiple>
    </div>
  <div class="col-md-3 mb-3">
      <label for="validationDefault05">Servicios basicos del  Local</label>
      <input type="text" class="form-control" name="txtSerlcl" id="validationDefault05" required>
    </div>
  
  <div class="col-md-3 mb-3">
      <label for="validationDefault05">N° de Vendedores por  Local</label>
      <input type="text" class="form-control" name="txtnumvend" id="validationDefault05" required>
    </div>
  
<div class="col-md-3 mb-2">
      <label for="validationDefault05">Precio de Alquiler del  Local</label>
      <input type="text" class="form-control"name="txtprealqui"  id="validationDefault05" required>
    </div>
  <div class="col-md-3 mb-2">
      <label for="validationDefault05">Telefono</label>
      <input type="text" class="form-control" name="txtTelefono" id="validationDefault05" required>
    </div>
    <div class="col-md-3 mb-2">
      <label for="validationDefault05">Correo Electronico</label>
      <input type="text" class="form-control" name="txtEmail" id="validationDefault05" required>
    </div>
</div>

  <button class="boton"class="btn btn-primary" type="submit" method="POST">Guardar</button>
</form>
  </body>
</html>