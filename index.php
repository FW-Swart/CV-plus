<!DOCTYPE html>

<html lang="en">

    <!-- SWART 1e = now head landingspage template -->
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- SWART include Bootstrap -->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
        crossorigin="anonymous"
        >

        <!-- SWART include custom fonts from google -->
        <link rel="stylesheet" 
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" 
        >


        <!-- SWART include landingspage.css-->
        <link rel="stylesheet" href="cv-plus/static/css/syle-main.css">
        <link rel="stylesheet" href="cv-plus/static/css/style-all.css">

        <!-- SWART include browser-tab icon -->
        <link rel="icon" href=" " sizes="32x32">

        <title>DEV-LANDINGPAGE !</title>

    </head>


    <body>
        

        <header>

            <!-- SWART header fixed all pages -->
            <div class="container-fluid">
                <div class="row">
                    <div id="navbartop" class="navbar fixed-top">

                        <span class="brand-zw" >
                            CV-<i>plus</i>
                        </span>

                    </div>

                </div>
            </div>


        </header>


        <!-- SWART main scrolling header -->
        <div id="brand-groot" class="container">
                <div class="row pt-2 pb-3 justify-content-center">

                    <div class="col-2">

                    </div>

                    <!-- SWART Big Brand center top-->
                    <div class="col-8">
                        <h1 class="brand-h1">CV-<i>plus</i></h1>
                        <h2 class="brand-h2">subtitle / yell mission ??</h2>
                    </div>

                    <!-- SWART navbar users & signin -->
                    <div class="col-2 justify-content-end">
                        <button>Invite</button>
                        <button>Register</button>
                        <button>Log-in</button>
                    </div>

                </div>
        </div>


        <!-- SWART navbar-main left side body-->
        <div id="navbar-main" class="navbar">

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Invite</a></li>
                    <li><a class="dropdown-item" href="#">Register</a></li>
                    <li><a class="dropdown-item" href="#">Log-in</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <h5>External Links</h5>
                    <li><a class="dropdown-item" href="#">UWV</a></li>
                    <li><a class="dropdown-item" href="#">Werk.nl</a></li>
                    <li><a class="dropdown-item" href="#">Vacaturebank.nl</a></li>
                </ul>
            </div>
        </div>

       
        <!-- SWART main content right side -->
        <main>

            <br>

            <h3>BODY main part comes here</h3>
            <p>met een test verandering voor gitHub !!</p>

            <br>

            <!-- SWART dashboard cards -->
            <div class="card d-inline-flex" style="width: 10rem;">

                <img src="cv-plus/static/img/dashbord/mediensturmer-aWf7mjwwJJo-unsplash.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Overview</h5>
                    <p class="card-text">
                        <ul>
                            <li>
                                Short text overview
                            </li>
                            <li>
                                Demo video
                            </li>
                        </ul>
                    </p>
                    <a href="#" class="btn btn-outline-success">Quick Review</a>
                </div>

            </div>

            <div class="card d-inline-flex" style="width: 10rem;">

                <img src="cv-plus/static/img/dashbord/neonbrand-YHYHu_IuM3Q-unsplash.jpg" class="card-img-top" alt="...">
                
                <div class="card-body">
                    <h5 class="card-title">Tutorial</h5>
                    <p class="card-text">
                        <ul>
                            <li>
                                Quick tips
                            </li>
                            <li>
                                FAQ
                            </li>
                            <li>
                                Tutorial video
                            </li>
                        </ul>    
                    </p>
                    <a href="#" class="btn btn-outline-success">Tutorial</a>
                </div>

            </div>

            <div class="card d-inline-flex" style="width: 10rem;">

                <img src="cv-plus/static/img/dashbord/robin-pierre-dPgPoiUIiXk-unsplash.jpg" class="card-img-top" alt="...">
                
                <div class="card-body">
                    <h5 class="card-title">About <strong>CV-</strong><i>plus</i></h5>
                    <p class="card-text">
                        <ul>
                            <li>
                                Story
                            </li>
                            <li>
                                Who we are
                            </li>
                        </ul>     
                    </p>
                    <a href="#" class="btn btn-outline-success">About</a>
                </div>

            </div>
            
            <div class="card d-inline-flex" style="width: 10rem;">

                <img src="cv-plus/static/img/dashbord/quino-al-4SNUcHPiC8c-unsplash.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                <h5 class="card-title">Contact <strong>CV-</strong><i>plus</i></h5>
                    <p class="card-text">
                        <ul>
                            <li>
                                E-mail
                            </li>
                            <li>
                                Adres
                            </li>
                            <li>
                                Phone-nuber
                            </li>
                            <li>
                                 .... etc.
                            </li>
                        </ul>
                    </p>
                    <a href="#" class="btn btn-outline-success">Contact</a>
                </div>

            </div>
            
            <br><hr><br>

            <!-- SWART section storys -->
            <section>

                <article>
                    <h4>Story 1</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam similique excepturi inventore consequatur corporis doloremque est, cum odit aliquam eligendi quaerat culpa ex sequi obcaecati facere tempore omnis repellendus modi.
                        Veritatis velit nostrum sed, ipsum cupiditate illum perferendis pariatur, eligendi fuga repudiandae cumque consectetur autem quia ipsa id esse nihil est explicabo vero doloribus cum odio. Necessitatibus facilis suscipit eum?
                        Doloribus nesciunt suscipit repellendus quis! Consectetur, voluptatibus magnam, velit hic itaque accusamus amet veritatis praesentium odit molestias sit, placeat necessitatibus cumque voluptate recusandae? Aperiam accusamus, vero voluptatibus omnis alias eius?
                        Vel ipsum nobis sit enim sequi ipsam eius omnis cum sed? Exercitationem, quasi. Quasi vitae, consequuntur necessitatibus recusandae iste consequatur natus molestiae, iusto atque inventore, assumenda enim! Expedita, aspernatur tenetur.
                        Veritatis ex iste perferendis inventore fugit assumenda quae voluptates consectetur corporis, error aut suscipit rem eaque, laudantium optio non commodi. Natus quos autem sequi libero, voluptatum corrupti vitae nam distinctio?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt delectus quia iusto ex fuga? Maxime aliquam recusandae voluptates dolore! Odio minima rem vitae sunt obcaecati laboriosam veritatis expedita iste dolorem.
                    </p>
                </article>

                <br>

                <article>   
                    <h4>Story 2</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam similique excepturi inventore consequatur corporis doloremque est, cum odit aliquam eligendi quaerat culpa ex sequi obcaecati facere tempore omnis repellendus modi.
                        Veritatis velit nostrum sed, ipsum cupiditate illum perferendis pariatur, eligendi fuga repudiandae cumque consectetur autem quia ipsa id esse nihil est explicabo vero doloribus cum odio. Necessitatibus facilis suscipit eum?
                        Doloribus nesciunt suscipit repellendus quis! Consectetur, voluptatibus magnam, velit hic itaque accusamus amet veritatis praesentium odit molestias sit, placeat necessitatibus cumque voluptate recusandae? Aperiam accusamus, vero voluptatibus omnis alias eius?
                        Vel ipsum nobis sit enim sequi ipsam eius omnis cum sed? Exercitationem, quasi. Quasi vitae, consequuntur necessitatibus recusandae iste consequatur natus molestiae, iusto atque inventore, assumenda enim! Expedita, aspernatur tenetur.
                        Veritatis ex iste perferendis inventore fugit assumenda quae voluptates consectetur corporis, error aut suscipit rem eaque, laudantium optio non commodi. Natus quos autem sequi libero, voluptatum corrupti vitae nam distinctio?
                    </p>
                </article>
            
            </section>

            <br>

        </main>


        <hr>

        <h2 class="brand-h2">is there a 'omdenk' api??</h2>


        <footer>

             <!-- SWART footer fixed all pages -->
            <div id="navbarbottom" class="navbar fixed-bottom">

                <div class="sw-info">
                    <button class="btn btn-s-mainf mx-1 p-1">
                        <a class="btn btn-s-mainf mx-1 p-1"  href="http://www.swartwerk.nl"> www.swartwerk.nl </a>
                    </button>
                    <button class="btn btn-s-mainf mx-1 p-1">
                        <a class="btn btn-s-mainf mx-1 p-1"  href=""> e-mail </a>
                    </button>                
                </div>

                <div class="brand-footer">
                    <span>© Swartwerk <sup>      &#8482;</sup></span>
                </div>
                
            </div>


        </footer>


        <!-- SWART include own .js script -->


        <!-- SWART this is jQuery first, then Popper.js, then Bootstrap JS -->
        <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
        </script>
        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous">
        </script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous">
        </script>


    </body>


</html>