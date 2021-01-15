<?php

require ('views/partials/header-brand-nav.php');

require ('views/partials/cv-show/header-cv-show.php');

require ('views/partials/nav-logout.php');

?>

    <main class="container-fluid noscrollfrm" >

        <section class="container-fluid">

            <div class="row my-2 justify-content-around">
                <h3 class="brand-h2">
                    Welcome <?= $_SESSION['user']['full_name'] ?>
                </h3>
            </div>

            <div class="row my-2 justify-content-around">
                <h3 class="brand-h3">
                    CV-show-page of <?= $_SESSION['user']['created_name'] ?>
                    <?= dd($_SESSION) ?>
                </h3>
            </div>
 
        </section>

    </main>