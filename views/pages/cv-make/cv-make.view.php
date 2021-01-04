<?php

// require ('views/partials/head.php');

require ('views/partials/header-brand-nav.php');

require ('views/partials/cv-make/header-cv-make.php');

require ('views/partials/nav-logout.php');

?>

    <main class="container-fluid noscrollfrm" >

        <section class="container-fluid">

            <div class="row my-2 justify-content-around">
                <h3 class="brand-h3">
                    CV-make page: <?= $_SESSION['user']['full_name'] ?>
                </h3>
            </div>  


            <!-- <div class="row">
            

                <h1 class="brand-h3">CV-make frontpage.view</h1>


            </div>  -->

        </section>

    </main>


<?php

// require ('views/partials/footer-brand.php');

?>