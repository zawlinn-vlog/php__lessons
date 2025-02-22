<?php
    

?>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a href="index.php" class="navbar-brand">LOGO</a>
        <div class="navbar-toggler" data-bs-target="#myNav" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </div>
        <div class="navbar-collapse collapse" id="myNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="product.php" class="nav-link">Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="product.php" class="nav-link">Wars</a>
                </li>
                <li class="nav-item">
                    <a href="product.php" class="nav-link">IT News</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Members
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Register</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
               

                <?php

                    if(isset($_SESSION['email'])){

                        $secNav = <<<NAVBAR
                            <li class="nav-item">
                                <a href="cart.php" class="nav-link">Cart</a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link">logout</a>
                            </li>
                        NAVBAR;

                        echo $secNav;
                    }
                    else{
                        $secNav = <<<NAVBAR

                            <li class="nav-item">
                                <a href="login.php" class="nav-link">Login</a>
                            </li>
                        NAVBAR;

                        echo $secNav;
                    }

                ?>
               
            </ul>
        </div>
    </div>
</nav>