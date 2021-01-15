
        <!-- SWART main non scrolling header -->
        <div id="brand-groot" class="container-fluid">
            <div class="row pt-2 pb-3 ml-4">

                <div class="col-2 text-center my-auto mx-auto">
                    <!-- !!!!! hier afhankelijk van welke pagina back of log-out button -->
                    

                    <?php require ('views/partials/main/nav-gohome.php'); ?>

                </div>

                <!-- SWART Big Brand center top-->
                <div class="col-8">
                    <!-- <canvas id="canvas" width="300" height="300"> -->
                        <div class="row justify-content-center main-header mb-4">
                            <h1 class="brand-h1 ">
                                CV-<i>plus &nbsp </i>
                            </h1>
                            <img class="navbar-main-img" src="/static/img/Highlightmarker-green.png" alt="green marker icon">

                        </div>
                    <!-- </canvas> -->

                    <div class="row justify-content-center p-1 ml-3">
                      <!-- depending on login user/invite/rergister tekstjer -->
                    </div>

                </div>

                <!-- SWART navbar users & signin -->
                <div class="col-2 text-center my-auto mx-auto">
                    <!-- !!!!! hier de inlog nav ?????? -->
                    <?php require ('views/partials/main/nav-inlog.php'); ?>
                </div>

            </div>
        </div>