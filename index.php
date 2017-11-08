<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" type="text/css" href="css/middle-body.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <title>Tienda Motorola</title>
  <!-------------------------------------------------------------------------------------------------------------------------------------- -->
  </head>
  <body>
       <?php require_once("./functions/funciones.php");?>

      <div class="cointaner">
            <?php require_once("navbar.php"); ?>

         <div class="middle-body">
              <?php require_once("middle-body.php"); ?>
          </div>

          <div class="foot">
            <?php require_once("footer.php"); ?>
          </div>
   </div>


  </body>
</html>
