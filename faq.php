<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Chicos cree un css para el foot y esta puesto en la carpeta corespondiente-->
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <!-- Chicos cree un css para el middle-body y esta puesto en la carpeta corespondiente-->
    <link rel="stylesheet" type="text/css" href="css/middle-body.css">

    <title>Tienda Motorola</title>
  <!-------------------------------------------------------------------------------------------------------------------------------------- -->
  </head>
  <body>
      <div class="cointaner">
            <?php require("navbar.php") ?>
      </div>  
        

<div class="page-header">
    <h1>HelloMoto FAQ'S <small>Preguntas Frecuentes</small></h1>
</div>

<div >
    <br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
     Ests seccion nos informa sobre las <strong>FAQ'S</strong> de <strong>HelloMoto</strong> y todas las preguntas frecuentes que pueden realizarse a la hora de hacer una compra. 
    </div>

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader"><h2>Preguntas generales</h2></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Necesito estar registrado?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    La registracion es <strong>obligatoria</strong> para la compra de nuestros productos. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">¿Cuales son los metodos de pagos disponibles</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                    Por el momento contamos con pagos mediante: <strong>-Visa(credito y debito) -Mastercard(solo internacional)</strong> y <strong>-American Express</strong> 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">¿Puedo retirar el producto por algun punto de distribucion?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    No, solamente se podra recepcionar el producto por <strong>envio</strong>.
                </div>
            </div>
        </div>

        <div class="faqHeader"><h2>Compras</h2></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">¿Hay algun limite para compras por dia?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <strong>No</strong>.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">¿Como puedo registrame?</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    Los pasos a seguir son:
                    <ul>
                        <li>Registrarse (haciendo click en el boton de registrame)</li>
                        <li>Te llegara un mail con el registro realizado</li>
                        <li>Verifica que todos los datos esten bien</li>
                        <li>Opcional: Carga los datos de tu tarjeta.</li>
                        <li>Listo ya puede comprar!!.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">¿Cuanto sale el envio?</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    Superando los $1800 el envio es  <strong>gratis</strong>, si no supera ese monto el costo del envio sera de $250 +iva.
                    <br />
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">¿A donde me llega la factura de mi compra?</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    Te llegara un mail con el pedido de compra y luego te llegara un segundo con el pago procesado con su respectiva factura final.
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">¿Puede recibirlo cualquier persona?</a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    Si, pero debera tener una fotocopia de la tarjeta y del documento del titular o quien haya realizado la compra.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">¿Cuanto tiempo tengo para completar mi compra?</a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="panel-body">
                    Una vez ingresado el pedido tenes 2 dias para terminar con el pago del mismo. 
                </div>
            </div>
        </div>

       
    </div>
</div>

          

          <div class="foot">
            <?php require("footer.php") ?>
          </div>
   </div>


  </body>
</html>
