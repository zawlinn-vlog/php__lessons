<?php

include_once "./assets/modules/head.php";
include_once "./assets/modules/navbar.php";
include_once ("./assets/modules/header.php");
?>



<div class="container mt-4 p-0">
    <div class="row w-100 g-0">
        <div class="col-3 d-none d-md-block pe-3">
           <?php include_once "./assets/modules/sidebar.php"  ?>
        </div>

        <div class="col-12 col-md-9 px-0 pb-5 " >
            <div class="row gy-4" >
                <!-- Cards -->
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card p-3">
                        <img src="./assets/img/logo.jpg" class="card-img-top " alt="" style="height: 14rem; object-fit: cover;">
                        <div class="card-body mt-3">
                            <h3 class="card-title text-secondary">Card Title &mdash;</h3>
                            <p class="card-text text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatem sed consectetur? Sint eos...</p>
                        </div>
                        <div class="d-flex ms-auto mt-4">
                            <a href="" class="text-link text-decoration-none me-3" >Edit</a>
                            <a href="" class="text-link text-decoration-none">Read More</a>
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