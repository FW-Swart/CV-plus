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
                            <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th> First Name </th>
                                        <th class="sorttable_nosort"> insertion </th>
                                        <th> Last Name </th>
                                        <th class="sorttable_nosort"> MODIFY </th>
                                    </tr>
                                </thead>
                                    <?php foreach ($vars ['users'] as $row) : ?>
                                <tr> 
                                    <td>
                                        <a href=""> <strong> <?= $row ['first_name'] ?> </strong> </a>
                                    </td>
                                    <td>
                                        <?= $row ['insertion'] ?>
                                    </td>
                                    <td>
                                        <?= $row ['last_name'] ?>
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
                         
                        <div class="tab-pane fade" id="workexp">
                            <h4 class="mt-2">Work experience content</h4>
                            <div class="scroll-container container table-responsive">
                                <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th> Company Name </th>
                                            <th> City </th>
                                            <th> Country </th>
                                            <th class="sorttable_nosort"> Function </th>
                                            <th class="sorttable_nosort"> Periode </th>
                                            <th class="sorttable_nosort"> MODIFY </th>
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
                                            <a href=""> <strong> <?= $row ['function_name'] ?> </strong> </a>
                                        </td>
                                        <td>
                                            <!-- if no end date => still in function -->
                                            started on <?= $row ['start_date'] ?> till <?= $row ['end_date'] ?>
                                        </td>
                                        <td>
                                            <?= $row ['id'] ?>
                                        </td>
                                    </tr>
                                            <!-- add new row for work experience -->
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
                                            <th> Institute Name </th>
                                            <th> City </th>
                                            <th> Country </th>
                                            <th class="sorttable_nosort">MODIFY</th>
                                        </tr>
                                    </thead>
                                        <?php foreach ($vars ['education'] as $row) : ?>
                                    <tr> 
                                        <td>
                                            <a href=""> <strong> <?= $row ['institute_name'] ?> </strong> </a>
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

                        <div class="tab-pane fade" id="passions">
                            <h4 class="mt-2">Passions content</h4>
                            <div class="scroll-container container">
                                <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th> Passion </th>
                                            <th class="sorttable_nosort"> Passion description </th>
                                            <th class="sorttable_nosort">MODIFY</th>
                                        </tr>
                                    </thead>
                                        <?php foreach ($vars ['passions'] as $row) : ?>
                                    <tr> 
                                        <td>
                                            <a href=""> <strong> <?= $row ['passion_name'] ?> </strong> </a>
                                        </td>
                                        <td>
                                            <?= $row ['passion_description'] ?>
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

                    </div>

                </div>

        </section>

    </main>