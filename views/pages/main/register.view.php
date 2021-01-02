<?php

// require ('views/partials/head.php');

require ('views/partials/header-brand-nav.php');

require ('views/partials/main/header-main.php');

require ('views/partials/main/nav-gohome.php');

?>
        <main class="container-fluid noscrollfrm">


            <section class="container-fluid p-1 m-1">

                <div class="row my-2 justify-content-around">
                    <h3 class="brand-h3">
                        Register
                    </h3>
                </div>   


                <div class="row justify-content-around">

                    <div class="col-6">

                        <div class="col-12 d-flex justify-content-center">
                            <div class="alert alert-danger" id="register-message" role="alert"></div>
                        </div>

                        <form action="" id="registerfrm" class="row g-3" name="registerfrm" methode="POST" onsubmit="return false;">
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" maxlength="80" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" maxlength="80" required>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" maxlength="50" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="password_2">Repeat password</label>
                                <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50" required>
                            </div>

                            <input type="hidden" name="token" value="register">
                            
                           
                            <div class="col-12 d-flex justify-content-center">
                                <input type="button" class="btn btn-dark m-4" id="register-cancel" value="Reset">
                                <input id='main-register' class="btn navbar-main-button m-4"  type="submit" value="Register"/>
                            </div>
                            
                            
                            <div class="row my-4 ">
                                <div id="register-message"></div>
                            </div>

                        </form>   

                        <div class="row pt-4 my-2 mt-4 brand-a1 justify-content-center">
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