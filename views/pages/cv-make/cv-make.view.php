<?php

require ('views/partials/header-brand-nav.php');

require ('views/partials/cv-make/header-cv-make.php');

require ('views/partials/nav-logout.php');

?>

    <main class="container-fluid noscrollfrm">

        <div class="container-fluid justify-content-around">
            <h3 class="brand-h3 mt-4">
                CV-make page: 
                
                <?= $_SESSION['user']['full_name'] ?>
            
            </h3>    
        </div>

        <section class="container">

                <div class="container container-fluid p-2">
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

                    <div class="tab-content container container-fluid p-2">
                        <div class="tab-pane fade" id="user"  >
                            <div class="row p-2 pr-4">
                                <h4 class="m-auto"> Personal Details </h4>

                                <?php require ('views/partials/cv-make/nav-in-table.php'); ?> 

                            </div>
                            <div class="scroll-container container py-4 px-2">

                                    <?php foreach ($vars ['users'] as $row) : ?> 
                                   
                                         <strong> <?= $row ['first_name'] ?> </strong> 
                                   
                                        <?= $row ['insertion'] ?>
                                    
                                        <?= $row ['last_name'] ?>
                                 
                                    <?php endforeach; ?>
                            
                            </div>
                        </div>
                         
                        <div class="tab-pane fade" id="workexp">
                            <div class="row p-2 pr-4">
                                <h4 class="m-auto"> Work experience </h4>
                                <?php require ('views/partials/cv-make/nav-top-table.php'); ?>
                            </div>
                            <div class="scroll-container container px-2 mt-4 table-responsive">
                                <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorttable_nosort"> MODIFY </th>
                                            <th> Company Name </th>
                                            <th> City </th>
                                            <th> Country </th>
                                            <th class="sorttable_nosort"> Function </th>
                                            <th class="sorttable_nosort"> Periode </th>
                                        </tr>
                                    </thead>
                                        <?php foreach ($vars ['workexp'] as $row) : ?>
                                    <tr>
                                        <td>
                                            <?php require ('views/partials/cv-make/nav-in-table.php'); ?>  
                                        </td>
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
                                            <a href=""> <?= $row ['function_name'] ?> </a>
                                        </td>
                                        <td>
                                            <!-- if no end date => still in function -->
                                            started on <?= $row ['start_date'] ?> till <?= $row ['end_date'] ?>
                                        </td>
                                    </tr>
                                            <!-- add new row for work experience -->
                                        <?php endforeach; ?>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="education">
                        <div class="row p-2 pr-4">
                                <h4 class="m-auto"> Education </h4>
                                <?php require ('views/partials/cv-make/nav-top-table.php'); ?>
                            </div>
                            <div class="scroll-container container px-2 mt-4 table-responsive">
                                <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorttable_nosort"> MODIFY </th>
                                            <th> Institute Name </th>
                                            <th> City </th>
                                            <th> Country </th>
                                        </tr>
                                    </thead>
                                        <?php foreach ($vars ['education'] as $row) : ?>
                                    <tr>
                                        <td>
                                            <?php require ('views/partials/cv-make/nav-in-table.php'); ?>  
                                        </td> 
                                        <td>
                                            <a href=""> <strong> <?= $row ['institute_name'] ?> </strong> </a>
                                        </td>
                                        <td>
                                            <?= $row ['city'] ?>
                                        </td>
                                        <td>
                                            <?= $row ['country'] ?>
                                        </td>
                                    </tr>
                                        <?php endforeach; ?>
                                </table> 
                            </div>
                        </div>

                        <div class="tab-pane fade" id="passions">
                            <div class="row p-2 pr-4">
                                <h4 class="m-auto"> Passions </h4>
                                <?php require ('views/partials/cv-make/nav-top-table.php'); ?>
                            </div>
                            <div class="scroll-container container px-2 mt-4 table-responsive">
                                <table border=1 cellspacing=1 cellpadding=2 class="table table-hover sortable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="sorttable_nosort"> MODIFY </th>
                                            <th> Passion </th>
                                            <th class="sorttable_nosort"> Passion description </th>
                                        </tr>
                                    </thead>
                                        <?php foreach ($vars ['passions'] as $row) : ?>
                                    <tr>
                                        <td>
                                            <?php require ('views/partials/cv-make/nav-in-table.php'); ?>  
                                        </td>
                                        <td>
                                            <a href=""> <strong> <?= $row ['passion_name'] ?> </strong> </a>
                                        </td>
                                        <td>
                                            <?= $row ['passion_description'] ?>
                                        </td>                
                                    </tr>
                                        <?php endforeach; ?>
                                </table> 
                            </div>
                        </div>

                    </div>

                </div>

        </section>
        <!-- mdal  delete-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

    </main>