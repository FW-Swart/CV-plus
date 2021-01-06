<?php

// require ('views/partials/head.php');

require ('views/partials/header-brand-nav.php');

require ('views/partials/main/header-main.php');

require ('views/partials/main/nav-gohome.php');

?>
        <main class="container-fluid noscrollfrm">


            <section class="container-fluid">

                <div class="row my-2 justify-content-around">
                    <h3 class="brand-h3">
                        User login
                    </h3>
                </div>   


                <div class="row justify-content-around">

                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 col-xxl-2">

                        <form action="" id="userLoginfrm" name="userLoginfrm" methode="POST" onsubmit="return false;">

                            <div class="row">
                                <div class="form-group input-group">
                                    <!-- label als icon -->
                                    <input class="form-control" id="email" type="email" name='email' placeholder="example@email.com" required/>          
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group input-group">
                                    <!-- label als icon -->
                                    <input class="form-control" type="password" name='password' id="password" placeholder="password" required/>     
                                </div>
                            </div>
                            
                            <input type="hidden" name="crf_token" value="<?= createToken() ?>">
                                
                            <div class=" row justify-content-end">
                                <input id='main-login-user' class="btn navbar-main-button" type="submit" value="Login"/>
                            </div>

                            <div class="row">
                                <div id="login-message"></div>
                            </div>

                        </form>   

                        <div class="row my-2 justify-content-center">
                            <button href="" class="brand-a1">
                                Get new password
                            </button>
                        </div> 
                        <div class="row my-2 brand-a1 justify-content-center">
                            <button href="" class="brand-a1">
                                Mail for Support
                            </button>
                        </div>

                    </div>

                </div>

            </section>


        </main>

    <script src="static/js/login.js"></script>

<?php

// require ('views/partials/footer-brand.php');

?>