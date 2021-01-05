<?php

// require ('views/partials/head.php');

require ('views/partials/header-brand-nav.php');

require ('views/partials/cv-make/header-cv-make.php');

require ('views/partials/nav-logout.php');

?>

    <main class="container-fluid noscrollfrm" >

        <section class="row justify-content-around">
            <h3 class="brand-h3 mt-4">
                CV-make page: <?= $_SESSION['user']['full_name'] ?>
            </h3>
        </section>

        <section class="row justify-content-around">

           <form action="" method="get">

           </form>

        </section>

    </main>


<?php

// require ('views/partials/footer-brand.php');

?>