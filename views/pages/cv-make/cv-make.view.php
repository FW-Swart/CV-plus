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
                            <a href="#user" class="nav-link sw-tab-btn" data-toggle="tab">Personal details</a>
                        </li>
                        <li class="nav-item">
                            <a href="#workexp" class="nav-link sw-tab-btn" data-toggle="tab">Work experience</a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link sw-tab-btn" data-toggle="tab">Education</a>
                        </li>
                        <li class="nav-item">
                            <a href="#passions" class="nav-link sw-tab-btn" data-toggle="tab">Passions</a>
                        </li>
                    </ul>

                    <div class="tab-content container-fluid p-2">

                        <div class="tab-pane fade" id="user">
                            <h4 class="mt-2">Personal details content</h4>
                            <div class="scroll-container container">

                                <table border=1 cellspacing=1 cellpadding=2>

                                    <th>

                                        <tr>
                                            <th data-sort="string"> Company Name <i class="fa fa-sort"></i></th>
                                            <th data-sort="string"> City <i class="fa fa-sort"></i></th>
                                        </tr>
                                    
                                    </th>
                

                                        <?php foreach ($vars ['workexp'] as $row) : ?>

                                    <tr> 
                                        <td>
                                            <?= $row ['company_name'] ?>
                                        </td>
                                        <td>
                                            <?= $row ['city'] ?>
                                        </td>
                                    </tr>

                                        <?php endforeach; ?>


                                </table>


                            </div>
                        </div>
                         
                        <div class="tab-pane fade" id="workexp">
                            <h4 class="mt-2">Work experience content</h4>
                            <div class="scroll-container container">
                                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda nemo expedita dicta nostrum, at et rerum libero beatae, culpa alias iste mollitia? Ex necessitatibus deserunt odio harum quod vero beatae.
                                Ipsum aliquam quos dolorem nobis, voluptates officia esse cupiditate sapiente, et natus ducimus? Similique debitis, laudantium maxime voluptas dolore dolorum explicabo laboriosam rem ullam, magni sint temporibus minus nisi numquam.
                                Voluptas, amet! Dicta asperiores deserunt, ex veniam natus ut temporibus maiores quibusdam quam dolore. Magni perferendis eaque velit eligendi esse quaerat aperiam nesciunt porro modi, consequatur itaque perspiciatis soluta labore?
                                Nihil corrupti rerum sit optio veritatis architecto, sequi iusto? Quidem, perferendis velit ullam asperiores rerum quod nobis sequi cum quisquam dolores odio praesentium facere totam animi iste veritatis provident eos.
                                Pariatur maiores vitae fuga nostrum expedita quos modi omnis, beatae obcaecati non odit reprehenderit eveniet eos? Error, tempore possimus adipisci obcaecati ad natus laboriosam unde repellat molestiae dicta blanditiis? Nulla!</p>
                            
                                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda nemo expedita dicta nostrum, at et rerum libero beatae, culpa alias iste mollitia? Ex necessitatibus deserunt odio harum quod vero beatae.
                                Ipsum aliquam quos dolorem nobis, voluptates officia esse cupiditate sapiente, et natus ducimus? Similique debitis, laudantium maxime voluptas dolore dolorum explicabo laboriosam rem ullam, magni sint temporibus minus nisi numquam.
                                Voluptas, amet! Dicta asperiores deserunt, ex veniam natus ut temporibus maiores quibusdam quam dolore. Magni perferendis eaque velit eligendi esse quaerat aperiam nesciunt porro modi, consequatur itaque perspiciatis soluta labore?
                                Nihil corrupti rerum sit optio veritatis architecto, sequi iusto? Quidem, perferendis velit ullam asperiores rerum quod nobis sequi cum quisquam dolores odio praesentium facere totam animi iste veritatis provident eos.
                                Pariatur maiores vitae fuga nostrum expedita quos modi omnis, beatae obcaecati non odit reprehenderit eveniet eos? Error, tempore possimus adipisci obcaecati ad natus laboriosam unde repellat molestiae dicta blanditiis? Nulla!</p>

                                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda nemo expedita dicta nostrum, at et rerum libero beatae, culpa alias iste mollitia? Ex necessitatibus deserunt odio harum quod vero beatae.
                                Ipsum aliquam quos dolorem nobis, voluptates officia esse cupiditate sapiente, et natus ducimus? Similique debitis, laudantium maxime voluptas dolore dolorum explicabo laboriosam rem ullam, magni sint temporibus minus nisi numquam.
                                Voluptas, amet! Dicta asperiores deserunt, ex veniam natus ut temporibus maiores quibusdam quam dolore. Magni perferendis eaque velit eligendi esse quaerat aperiam nesciunt porro modi, consequatur itaque perspiciatis soluta labore?
                                Nihil corrupti rerum sit optio veritatis architecto, sequi iusto? Quidem, perferendis velit ullam asperiores rerum quod nobis sequi cum quisquam dolores odio praesentium facere totam animi iste veritatis provident eos.
                                Pariatur maiores vitae fuga nostrum expedita quos modi omnis, beatae obcaecati non odit reprehenderit eveniet eos? Error, tempore possimus adipisci obcaecati ad natus laboriosam unde repellat molestiae dicta blanditiis? Nulla!</p>

                                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda nemo expedita dicta nostrum, at et rerum libero beatae, culpa alias iste mollitia? Ex necessitatibus deserunt odio harum quod vero beatae.
                                Ipsum aliquam quos dolorem nobis, voluptates officia esse cupiditate sapiente, et natus ducimus? Similique debitis, laudantium maxime voluptas dolore dolorum explicabo laboriosam rem ullam, magni sint temporibus minus nisi numquam.
                                Voluptas, amet! Dicta asperiores deserunt, ex veniam natus ut temporibus maiores quibusdam quam dolore. Magni perferendis eaque velit eligendi esse quaerat aperiam nesciunt porro modi, consequatur itaque perspiciatis soluta labore?
                                Nihil corrupti rerum sit optio veritatis architecto, sequi iusto? Quidem, perferendis velit ullam asperiores rerum quod nobis sequi cum quisquam dolores odio praesentium facere totam animi iste veritatis provident eos.
                                Pariatur maiores vitae fuga nostrum expedita quos modi omnis, beatae obcaecati non odit reprehenderit eveniet eos? Error, tempore possimus adipisci obcaecati ad natus laboriosam unde repellat molestiae dicta blanditiis? Nulla!</p>

                                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda nemo expedita dicta nostrum, at et rerum libero beatae, culpa alias iste mollitia? Ex necessitatibus deserunt odio harum quod vero beatae.
                                Ipsum aliquam quos dolorem nobis, voluptates officia esse cupiditate sapiente, et natus ducimus? Similique debitis, laudantium maxime voluptas dolore dolorum explicabo laboriosam rem ullam, magni sint temporibus minus nisi numquam.
                                Voluptas, amet! Dicta asperiores deserunt, ex veniam natus ut temporibus maiores quibusdam quam dolore. Magni perferendis eaque velit eligendi esse quaerat aperiam nesciunt porro modi, consequatur itaque perspiciatis soluta labore?
                                Nihil corrupti rerum sit optio veritatis architecto, sequi iusto? Quidem, perferendis velit ullam asperiores rerum quod nobis sequi cum quisquam dolores odio praesentium facere totam animi iste veritatis provident eos.
                                Pariatur maiores vitae fuga nostrum expedita quos modi omnis, beatae obcaecati non odit reprehenderit eveniet eos? Error, tempore possimus adipisci obcaecati ad natus laboriosam unde repellat molestiae dicta blanditiis? Nulla!</p>

                            
                            </div>
                        </div>

                        <div class="tab-pane fade" id="education">
                            <h4 class="mt-2">Education content</h4>
                            <div class="scroll-container container">
                                <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
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
