<?php

require ('views/partials/head.php');

require ('views/partials/header-brand-nav.php');

require ('views/partials/main/header-main.php');

require ('views/partials/main/nav-gohome.php');

?>
        <main class="scroll-container">


            <section class="container-flued">

                <div class="row justify-content-around">

                    <div class="">
                        <div id="inlog-header">
                            User login
                        </div>
                        <div class="col-sm-12 col-md-10 col-md-offset-1">

                            <form action="" id="user-inlog-form">
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" type="text" name='username' placeholder="username"/>          
                                </div>

                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input class="form-control" type="password" name='password' placeholder="password"/>     
                                </div>
                                                               

                                <button id='main-login-user' class="btn navbar-main-button" type="button">
                                    <a class="navbar-main-button" href="cv-home-make">Login</a>
                                </button>


                                <div class="form-group text-center">
                                    <a href="#">Forgot Password</a>
                                    <br>
                                    <a href="#">Mail for Support</a>
                                </div>
                            </form>

                        </div>

                    </div> 

                </div>

            </section>


        </main>


<?php

require ('views/partials/footer-brand.php');

?>