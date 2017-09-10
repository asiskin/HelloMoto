      <nav class="navbar navbar-default" height="60px" role="navigation">
         <!-- Brand and toggle get grouped for better mobile display -->

                 <a class="navbar-brand" href="#">
                   <img alt="Brand" src="./images/logo.png" height="40px">
                 </a>


         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li class="active"><a href="http://www.jquery2dotnet.com">Home</a></li>
               <li><a href="http://www.jquery2dotnet.com">About Us</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
               <div class="form-group">
                  <input type="text" class="form-control" width="200px" placeholder="Search">
               </div>
               <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="http://www.jquery2dotnet.com">Sign Up</a></li>
               <li class="dropdown">
                  <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                  <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                     <li>
                        <div class="row">
                           <div class="col-md-6">
                              <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                 <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                 </div>
                                 <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                 </div>
                                 <div class="checkbox">
                                    <label>
                                    <input type="checkbox"> Remember me
                                    </label>
                                 </div>
                                 <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </li>
                     <li class="divider"></li>
                     <li>
                        <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                        <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
