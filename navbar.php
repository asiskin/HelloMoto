<?php
        require_once("./functions/funciones.php");

        if(!isset($_SESSION)){session_start();}
        $email_logueado=$_COOKIE["usuarioLogueado"] ?? null;
        $username_logueado=$_SESSION["username"] ?? null;

if(isset($_POST["logout"])){

                            logout();//-----borro $_SESSION-----
                            $_POST=null;

}elseif($_POST && !isset($_POST["nombre"])){ //------que haya un post, y que sea un post de login y no de registracion
                           $arrayDeErrores = validarLogin();

                           if (count($arrayDeErrores) > 0) { ?>
                               <ul style="color:red;">
                                   <?php foreach($arrayDeErrores as $error) { ?>
                                                                           <li>
                                                                             <?=$error?>
                                                                           </li>
                                                                         <?php } ?>
                               </ul>
                                                        <?php }else{
                                 //login exitosa validacion de datos!!!, ahor a ver si existe en nuestra base de datos JSON
                                                                   if(VER_SI_EXISTE_USUARIO($_POST["email"]))
                                                                                {

                                                                                if($_POST["recordame"] == "on"){recordarUsuario($_POST["email"]);}else{no_recordarUsuario();}

                                                                                logout();
                                                                                INICIAR_SESION_USUARIO($_POST["email"]);
                                                                                $_POST=null;

                                                                                header("Location: user-logueado.php");
                                                                              }else {  ?>
                                                                                <ul>
                                                                                  <li>
                                                                                  EL USUARIO NO EXISTE!!
                                                                                  </li>
                                                                                </ul>
                                                                                <?php

                                                                              }
                                                                  }

                                    }



?>
<!----------------MENU IZQUIERDO DE LA NAV-BAR--------------------------------------------------->
<nav class="navbar navbar-default navbar-inverse" role="navigation">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
<!-------------logo de motorola------------------------------------------------------>
          <a class="navbar-brand" href="index.php">
            <img src="./images/logoblanco.png"> </img>
          </a>
<!----------------ICONOS IZQUIERDOS DE LA NAV-BAR--------------------------------------------------->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!------------------------------------------------------------------->
                <ul class="nav navbar-nav">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#ofertas">Ofertas </a></li>
                  <li><a href="faq.php">Preguntas Frecuentas </a></li>
                </ul>
                <form class="navbar-form navbar-left navbar-moto" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar Producto" size="40px">
                  </div>
                  <button type="submit" class="btn btn-default">Buscar</button>
                </form>

<!-----------------------------MENU DERECHO DE LA NAV-BAR--------------------------------->
<ul class="nav navbar-nav navbar-right">
<!-----------------------------ICONOS DERECHOS DE LA NAV-BAR----->

<?php if(isset($_SESSION["username"])){ ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if(isset($_SESSION["usuarioLogueado"])){echo "BIENVENIDX ".$username_logueado;} ?><span class="caret"></span></a>

           <ul id="login-dp" class="dropdown-menu">
    				<li>
    					 <div class="row">
    						<div class="col-md-12">
                             <form style="" class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">

                                 <div class="form-group" >
                                    <button type="submit" name="logout" class="btn btn-primary btn-block">Logout</button>
                                 </div>

                              </form>
                   </div>
                 </div>
              </li>
            </ul>

<?php } ?>

<?php if(isset($_SESSION["username"])){}else{ //-----SI ESTA LOGUEADO NO QUIERO QUE SE VEAN LOS BOTONES REGISTRATE Y LOGUEATE?>
<!---------------------------------------------BOTON REGISTRATE------------------------------------------------------------------------->
        <li><a href="registracion.php">Registrate</a></li>
<!---------------------------------------------BOTON LOGUEATE------------------------------------------------------------------------->

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logueate<span class="caret"></span></a>
			 <ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
						<div class="col-md-12">
<!---------------------------------------------Login FACEBOOK TWEETER----->
							<div class="social-buttons">
									<a href="http://www.facebook.com/login-dp" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="http://www.twitter.com/login-dp" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
<!-------------------------------------LOGUEO----------------->
					      <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="email">Email</label>
											 <input type="email" class="form-control" name="email" value="<?php  echo $email_logueado; ?>" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="password">Password</label>
											 <input type="password" class="form-control" name="contrasena" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Olvidaste el Pasword ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Login</button>
                		</div>
										<div class="checkbox">
											 <label></label>
											 <input type="checkbox" name="recordame"> Recordame</input>

										</div>
						     </form>


							</div> <!--cierra el div social buttons---->
							<div class="bottom text-center">
								Sos nuevo? <a class="navbar-inverse" href="registracion.php" name="registro">Registrate</a>
							</div> <!--cierra el div col md 12---->

           </div> <!--cierra el div row---->
				</li>
			</ul> <!--cierra el ul drop-down menu---->
    </li> <!--cierra el li dropdown---->
<?php } ?>
<!----------------------------------------------------------------------------------------------------------------------------------->
  </ul> <!--cierra el ul nav navbar-nav navbar-right-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
