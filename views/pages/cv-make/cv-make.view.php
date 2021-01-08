<?php

require ('views/partials/header-brand-nav.php');

require ('views/partials/cv-make/header-cv-make.php');

require ('views/partials/nav-logout.php');

?>

    <main class="container-fluid noscrollfrm">

      
        <div class="container-fluid justify-content-around">
            <h3 class="brand-h3 mt-4">
                CV-make page: <?= $_SESSION['user']['full_name'] ?>
            </h3>
        </div>

        <section class="container-fluid">

                <div class="bs-example container">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="nav-item">
                            <a href="#user" class="nav-link sw-tab-btn" data-toggle="tab">
                            Personal details
                            <a href="#user"></a>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#workexp" class="nav-link sw-tab-btn" data-toggle="tab">
                            Work experience
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link sw-tab-btn" data-toggle="tab">
                            Education
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#passions" class="nav-link sw-tab-btn" data-toggle="tab">
                            Passions
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content container-fluid p-2">

                        <div class="tab-pane fade" id="user"  >
                            <h4 class="mt-2">Personal details content</h4>
                            <div class="scroll-container container">



                            </div>
                        </div>
                         
                        <div class="tab-pane fade" id="workexp">
                            <h4 class="mt-2">Work experience content</h4>
                            <div class="scroll-container container table-responsive">
                                <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th data-sort="string"> Company Name </th>
                                            <th data-sort="string"> City </th>
                                            <th data-sort="string"> Country </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($vars ['workexp'] as $row) : ?>
                                        <tr> 
                                            <td>
                                                <a href=""> <strong> <?= $row ['company_name'] ?> </strong> </a>
                                            </td>
                                            <td>
                                                <?= $row ['city'] ?>
                                            </td>
                                            <td>
                                                <?= $row ['country'] ?>
                                            </td>
                                            <td>
                                                <!-- hidden buttton edit/ remove show when record active -->
                                                <!-- selection box for algemen edit/remove buttons -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="education">
                            <h4 class="mt-2">Education content</h4>
                            <div class="scroll-container container">
                            <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th data-sort="string"> Company Name </th>
                                            <th data-sort="string"> City </th>
                                            <th data-sort="string"> Country </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($vars ['education'] as $row) : ?>
                                        <tr> 
                                            <td>
                                                <a href=""> <strong> <?= $row ['institute_name'] ?> </strong> </a>
                                            </td>
                    
                                            <td>
                                                <!-- hidden buttton edit/ remove show when record active -->
                                                <!-- selection box for algemen edit/remove buttons -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </table>
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="passions">
                            <h4 class="mt-2">Passions content</h4>
                            <div class="scroll-container container">
                                <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        



    </main>
