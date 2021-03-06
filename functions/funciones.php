<?php



//------------------------------------------------------------------------------------------------------------
function validarLogin() {

      $arrayDeErrores= [];

    if($_POST["email"] == "") {
      $arrayDeErrores["email"] = "El campo mail no puede estar vacío";
    }
    else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
      $arrayDeErrores["email"] = "Ingrese un e-mail válido";
    }


    if (strlen($_POST["contrasena"]) < 8) {
      $arrayDeErrores["contrasena"] = "Ingrese una contraseña de al menos 8 caracteres";
    }
    else if (preg_match('/[A-Z]/', $_POST["contrasena"]) == false) {
      $arrayDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 1 mayuscula";
    }

    return $arrayDeErrores;
  }
//------------------------------------------------------------------------------------------------------------
function validarRegistracion() {


  $arrayDeErrores = [];

  $nombreDelArchivo = $_FILES["avatar"]["name"];
  $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);
    if($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
    $arrayDeErrores["avatar"] = "Hubo un error al subir el archivo";
  }
  else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension !=  "png") {
    $arrayDeErrores["avatar"] = "Necesitamos que el avatar sea una foto";
  }



  if($_POST["nombre"] == "") {
    $arrayDeErrores["nombre"] = "El campo nombre no puede estar vacío";
  } elseif (preg_match('/[1-9]/', $_POST["nombre"])) {
    $arrayDeErrores["nombre"] = "El campo nombre no puede contener números";
  }


  if($_POST["apellido"] == "") {
    $arrayDeErrores["apellido"] = "El campo Apellido no puede estar vacío";
  } elseif (preg_match('/[1-9]/', $_POST["apellido"])) {
    $arrayDeErrores["apellido"] = "El campo Apellido no puede contener números";
  }

  if($_POST["email"] == "") {
    $arrayDeErrores["email"] = "El campo mail no puede estar vacío";
  }
  else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores["email"] = "Ingrese un e-mail válido";
  }
  else if (VER_SI_EXISTE_USUARIO($_POST["email"]) == true) {
    $arrayDeErrores["email"] = "Mail ya ingresado ";
  }

  if (strlen($_POST["contrasena"]) < 8) {
    $arrayDeErrores["contrasena"] = "Ingrese una contraseña de al menos 8 caracteres";
  }
  else if (preg_match('/[A-Z]/', $_POST["contrasena"]) == false) {
    $arrayDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 1 mayuscula";
  }
  else if ($_POST["contrasena"] != $_POST["contrasena_confirm"])
  {
    $arrayDeErrores["contrasena"] = "Las dos contraseñas no verifican";
  }



  return $arrayDeErrores;
}
//------------------------------------------------------------------------------------------------------------
function armarUsuario($datos)  {
  return [
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "username" => $datos["username"],
    "email" => $datos["email"],
    "contrasenia" => password_hash($datos["contrasena"], PASSWORD_DEFAULT),
    "genero" => $datos["genero"],
    "f_nac" => $datos["fnac_dia"] . "-" . $datos["fnac_mes"] . "-" . $datos["fnac_anio"],
    "descripcion" => $datos["descripcion"]
  ];
}
//------------------------------------------------------------------------------------------------------------
function guardarUsuario($usuario) {
  $json = json_encode($usuario);
  file_put_contents("./json/usuarios.json", $json . PHP_EOL, FILE_APPEND);
}
//------------------------------------------------------------------------------------------------------------
function traerTodos() {
  $usuarios = [];

  $recurso = fopen("./json/usuarios.json", "r+");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuarios[] = json_decode($linea, true);
    $linea = fgets($recurso);
  }
  fclose($recurso);

  return $usuarios;
}
//------------------------------------------------------------------------------------------------------------
function VER_SI_EXISTE_USUARIO($email) {
  $recurso = fopen("./json/usuarios.json", "r+");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuario = json_decode($linea, true);

    if ($usuario["email"] == $email) {

            return true;

    }

    $linea = fgets($recurso);
  }
  fclose($recurso);


}
//------------------------------------------------------------------------------------------------------------

function INICIAR_SESION_USUARIO($email) {
            $recurso = fopen("./json/usuarios.json", "r+");
            $linea = fgets($recurso);
            while ($linea != false) {
                                      $usuario = json_decode($linea, true);

                                      if ($usuario["email"] == $email) {
                                              $_SESSION["usuarioLogueado"] = $usuario["email"];
                                              $_SESSION["username"] = $usuario["username"];


                                                                         }

                                      $linea = fgets($recurso);
                                    }

            fclose($recurso);


            }

//------------------------------------------------------------------------------------------------------------

function logout(){
                            if(isset($_SESSION)){
                                          session_unset();
                                          session_destroy();
                                          session_start();
                                                }
}
//------------------------------------------------------------------------------------------------------------
function estaLogueado() {
  if (isset($_SESSION["email"])) {
    return true;
  }
  else {
    return false;
  }
}

//------------------------------------------------------------------------------------------------------------
function recordarUsuario($email) {
  setcookie("usuarioLogueado", $email, time()+3600);
}
//------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------
function no_recordarUsuario() {
  setcookie("usuarioLogueado","",-1);
}
//------------------------------------------------------------------------------------------------------------
?>
