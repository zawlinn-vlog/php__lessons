<?php

include_once "./assets/modules/head.php";
include_once "./assets/modules/navbar.php";
include_once ("./assets/modules/header.php");
?>



<div class="container mt-4 p-0">
    <div class="row w-100">
        <div class="col-3 d-none d-md-block">
           <?php include_once "./assets/modules/sidebar.php"  ?>
        </div>

        <div class="col-12 col-md-9 ps-4 ms-2 pb-5" >
            <div class="row gy-4 mx-auto " >
                <div class="col-6 col-lg-4">
                    <div class="card p-3">
                        <h3 class="card-header text-secondary">Card Title &mdash;</h3>
                        <p class="card-body text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatem sed consectetur? Sint eos quae non eius nobis quos quidem.</p>
                        <div class="d-flex">
                            <button class="btn btn-primary ms-auto">Read Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card p-3">
                        <h3 class="card-header text-secondary">Card Title &mdash;</h3>
                        <p class="card-body text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatem sed consectetur? Sint eos quae non eius nobis quos quidem.</p>
                        <div class="d-flex">
                            <button class="btn btn-primary ms-auto">Read Me</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card p-3">
                        <h3 class="card-header text-secondary">Card Title &mdash;</h3>
                        <p class="card-body text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatem sed consectetur? Sint eos quae non eius nobis quos quidem.</p>
                        <div class="d-flex">
                            <button class="btn btn-primary ms-auto">Read Me</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "./assets/modules/footer.php";

?>