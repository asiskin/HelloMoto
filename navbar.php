<?php
        require("./functions/funciones.php");
        if(!isset($_SESSION)){session_start();}

        $email = $_POST['email'] ?? null;




        if($_POST){
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


                                          if(isset($_SESSION)){
                                                        session_unset();
                                                        session_destroy();
                                                              }

                                          session_start();
                                          $_SESSION=$_POST;
                                          $_POST=null;
                                          header("Location: user-logueado.php");
                                        }

                     }


?>

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img src="./images/logoblanco.png"> </img>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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

      <ul class="nav navbar-nav navbar-right">
<!-----------------------------LOGUEADO EL USUARIO!!------------------------------------------------------>
        <li><a><?php if(isset($_SESSION)){echo "BIENVENIDX ".$_SESSION['email'];} ?></a></li>

        <li><a href="registracion.php">Registrate</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logueate<span class="caret"></span></a>
			 <ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
<!---------------------------------------------Login via------------------------------------------------------------------------->
								<div class="social-buttons">
									<a href="http://www.facebook.com/login-dp" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="http://www.twitter.com/login-dp" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
<!-------------------------------------LOGUEO------------------------------------------------------------------------------------>
					 <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="email">Email</label>
											 <input type="email" class="form-control" name="email" value="<?php echo $email; ?>"placeholder="Email address" required>
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
											 <label>
											 <input type="checkbox"> Mantenme Logueado
											 </label>
										</div>
								 </form>

<!----------------------------------------------------------------------------------------------------------------------------------->
							</div>
							<div class="bottom text-center">
								Sos nuevo? <a class="navbar-inverse" href="registracion.php" name="registro">Registrate</a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
