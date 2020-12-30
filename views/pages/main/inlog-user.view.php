<?php

// require ('views/partials/head.php');

require ('views/partials/header-brand-nav.php');

require ('views/partials/main/header-main.php');

require ('views/partials/main/nav-gohome.php');

?>
        <main class="scroll-container">


            <section class="container-flued">

                <div class="row my-2 justify-content-around">
                    <div id="inlog-header">
                        User login
                    </div>
                </div>   


                <div class="row justify-content-around">

                    <div class="col-sm-8 col-md-6 col-md-offset-1">

                        <form action="" id="user-inlog-form" name="userLoginfrm" methode="POST" onsubmit="return false;">

                            <div class="row">
                                <div class="form-group input-group">
                                    <!-- label als icon -->
                                    <input class="form-control" type="email" name='email' placeholder="example@email.com" required />          
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group input-group">
                                    <!-- label als icon -->
                                    <input class="form-control" type="password" name='password' id="password" placeholder="password" required />     
                                </div>
                            </div>
                            
                            <input type="hidden" name="crf_token" value="<?= createToken() ?>">
                                
                            <div class=" row justify-content-end">
                                <input id='main-login-user' class="btn navbar-main-button" type="submit" value="Login" />
                            </div>

                            <div class="row">
                                <div id="login-message"></div>
                            </div>

                            <div class="form-group text-center">

                                <div class="row my-2 justify-content-center">
                                    <a href="#">Forgot Password</a>
                                </div> 
                                <div class="row my-2 justify-content-center">
                                    <a href="#">Mail for Support</a>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </section>


        </main>

    <script src="static/js/login.js"></script>

<?php

// require ('views/partials/footer-brand.php');

?>