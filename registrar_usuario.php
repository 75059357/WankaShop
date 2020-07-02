
<?php

include ("registrar_usuariophp.php")

?>

<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>WanKaShop</title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"><link rel="stylesheet" href="estilos/style.css">
<script src="js/validar_registro.js"> 

</script>


</head>





<body>
<!-- partial:index.partial.html -->
<div class="container">
    <div class="wrapper">
     
      <form class="form-wrapper"  method="post" name="f1" >
        <fieldset class="section is-active">
          <h3>Creación de Usuario</h3>
          <label>Nombre de Usuario:</label>
          <br>
          <input type="text" required="" name="nombre_usu" id="nombre_usu" placeholder="Nombre de Usuario a utilizar" value="<?php if(isset($nombre)) echo $nombre ?>">
          <label>Correo Elctronico:</label>
          <input type="text" name="correo" id="correo" placeholder="Email - Opcional" value="<?php if(isset($correo)) echo $correo ?>">
         
          <h3>Seleccione Tipo de Usuario</h3>
          <div class="row cf">
            <div class="four col">
              <input type="radio" name="r1" id="r1" checked value="Dueño de Local">
              <label for="r1">
                <h4>Dueño de Local</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r2" value="Vendedor"><label for="r2">
                <h4>Vendedor</h4>
              </label>
            </div>
            <div class="four col">
              <input type="radio" name="r1" id="r3" value="Comprador"><label for="r3">
                <h4>Comprador</h4>
              </label>
            </div>
          </div>

          <h3>Ingresar Contraseña</h3>
          <label>Contraseña:</label>
          <input type="password" required="" name="contra1" required="" id="contra1" placeholder="Contraseña">
          <label>Repetir Contraseña:</label>
          <input type="password" required="" name="contra2" required="" id="contra2" placeholder="Repite la Contraseña">
          <input class="submit button" type="submit" value="Registrarse" onClick="validar()"  name="submit">
        </fieldset>



       

        

        
      </form>
    </div>
  </div>



</body>

</html>
