<?php
include_once "./assets/modules/db.php";


// $res = dbconnection();


// errchk($res);


function getAllData(){

    $qry = "SELECT * FROM members";

    $db = dbconnection();

    $res = mysqli_query($db, $qry);

    

    while($row = mysqli_fetch_assoc($res)){
        echo $row['fullname'] . "<br/>";
        echo $row['username'] . "<br/>";
        echo $row['email'] . "<br/>";
        echo $row['password'] . "<br/>";
        echo "<hr/>";
    }   
}


getAllData();




include_once('./assets/modules/header.php');

include_once "./assets/modules/navbar.php";

include_once "./assets/modules/footer.php";