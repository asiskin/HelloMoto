<?php
$nombreDelArchivo = $_FILES["avatar"]["name"];
$extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);
  if($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
  $arrayDeErrores["avatar"] = "Hubo un error al subir el archivo";
}
else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension !=  "png") {
  $arrayDeErrores["avatar"] = "Necesitamos que el avatar sea una foto";
}


      $folder = "images/";
      if (is_dir($folder)) {
        if($open = opendir($folder)) {
          while (($avatar = readdir($open)) !=false) {
            echo '<img src = "images/' . $avatar . ' whidth = 320 height = 320> ';
                }
                closedir($open);
        }
      }
?>
