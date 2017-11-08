
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
    <title> Registración </title>
  </head>
<?php

 require_once("./functions/funciones.php");

$meses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
    7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
];

$nombre = $_POST['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? null;
$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;
$emailConfirm = $_POST['email_confirm'] ?? null;
$genero = $_POST['genero'] ?? null;
$dia = $_POST['fnac_dia'] ?? null;
$mes = $_POST['fnac_mes'] ?? null;
$anio = $_POST['fnac_anio'] ?? null;
$descripcion = $_POST['descripcion'] ?? null;



if(isset($_POST["nombre"]))
{

    $arrayDeErrores = validarRegistracion();

    if(count($arrayDeErrores) == 0) {

                                          $archivo = $_FILES["avatar"]["tmp_name"];
                                          $nombreDelArchivo = $_FILES["avatar"]["name"];
                                          $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);
                                          $nombre = dirname(__FILE__) . "/images/" . $_POST["username"] . ".$extension";

                                          move_uploaded_file($archivo, $nombre);
                                          
                                          guardarUsuario(armarUsuario($_POST));

                                        logout();

                                        INICIAR_SESION_USUARIO($_POST["email"]);//setea $_SESSION[usuarioLogueado] y $_SESSION[username]
                                        $_POST=null;
                                        header('Location: user-registrado.php');

                                      }
}
?>
<div class="row">
   <div class="col-sm-12">
      <?php require('navbar.php');?>
    </div>
</div>
<div class="container">

  <br>
        <div class="row">
<?php if(isset($_POST["nombre"])){if(count($arrayDeErrores) > 0 ){?>
              <ul style="color:red;">
                  <?php foreach($arrayDeErrores as $error) : ?>
                    <li>
                      <?=$error?>
                    </li>
                  <?php endforeach; ?>
              </ul>
<?php } } ?>
            <form role="form" action="registracion.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese Nombre">

                    </div>
                    <div class="form-group col-sm-6">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>" placeholder="Ingrese Apellido">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" placeholder="Ingrese Nombre de Usuario">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingrese Email">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email-confirm">Confirmar Email</label>
                        <input type="text" class="form-control" id="email-confirm" name="email_confirm" value="<?php echo $emailConfirm; ?>" placeholder="Ingrese Confirmación Email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="contrasena-confirm">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña">
                    </div>
                </div>
                <div class="form-group">
                    <div class="polig">
                        <p color="white"> Image Size 640 x 480 <p>
                    </div>
                    <div class="form-group ">
                      <div>
                        <br>

                                          <label> Subi tu foto  </label>
                                          <p> <input type="file" name="avatar"> </p>
                                          <!--<p><input type="submit" name="upload" value="Carga tu foto" ><p>-->


                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sexo</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_masculino" value="0"
                                <?php echo ($genero === "0") ? 'checked="checked"' : ''; ?>> Masculino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_femenino" value="1"
                                <?php echo ($genero == "1") ? 'checked="checked"' : ''; ?>> Femenino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_otros" value="2"
                                <?php echo ($genero == "2") ? 'checked="checked"' : ''; ?>> Otro
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label> Fecha de Nacimiento</label>
                    <div class="row">
                        <div class="col-md-1">
                            <select class="form-control" name="fnac_dia" >
                                <option value="">Día</option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option
                                        value="<?php echo $i; ?>"
                                        <?php echo ($i == $dia) ? 'selected="selected"' : ''; ?>
                                    ><?php echo $i; ?></option>
                                <?php } ?>

                                <?php /* for($i = 1; $i <= 31; $i++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        } */ ?>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <select class="form-control" name="fnac_mes">
                                <option value="">Mes</option>
                                <?php foreach ($meses as $numero => $nombre) { ?>
                                    <option
                                        value="<?php echo $numero; ?>"
                                        <?php echo ($numero == $mes) ? 'selected="selected"' : ''; ?>
                                    ><?php echo $nombre; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="fnac_anio">
                                <option value="">Año</option>
                                <?php for ($i = date('Y'); $i >= (date('Y') - 100); $i--) { ?>
                                    <option
                                        value="<?php echo $i; ?>"
                                        <?php echo ($i == $anio) ? 'selected="selected"' : ''; ?>
                                    ><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="5"><?php echo $descripcion ?></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones
                    </label>
                </div>
                <input type="submit" name="btn_submit" class="btn btn-info" value="Registrarme"/>
            </form>
        </div>
      </div>

</html>
