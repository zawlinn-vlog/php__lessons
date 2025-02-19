<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: ./login.php");
    echo "session have.";
}

    include_once "./assets/modules/header.php";

?>



<?php
    include_once "./assets/modules/footer.php";
?>