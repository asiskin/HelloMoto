<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Chicos cree un css para el foot y esta puesto en la carpeta corespondiente-->
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <!-- Chicos cree un css para el middle-body y esta puesto en la carpeta corespondiente-->
    <link rel="stylesheet" type="text/css" href="css/middle-body.css">
    <title><?php echo 'Usuario Logueado'?></title>
  </head>
<script type="javascript/text">
    function Redirigir() {
        alert("Usted será redirigido a la pagina de registracion");
        location.href="registracion.php";
      }
</script>
  <?php
  require_once('navbar.php');
  ?>
  <?php
    if (isset($_POST)) {
    echo "<script>";
    echo "Redirigir()";
    echo "</script>";
    }else{
      echo "acceso exitoso";
    }

   ?>