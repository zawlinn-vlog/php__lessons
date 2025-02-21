<?php
include_once "./assets/modules/db.php";



$sub = json_decode(file_get_contents("./assets/js/viewers.json"));

// errchk($sub);


$db =dbconnection();
errchk($db);

// foreach ($sub as $item){

//     foreach($item as $key => $val){
//         echo $key . " => "  . $val . "<br/>";
//     }

//     echo "<hr/>";
// }



foreach($sub as $item){
    $qry = "INSERT INTO viewers (tutorial_id, total_views, unique_views) values ($item->id, $item->total_views, $item->unique_views)";
    // $db = dbconnection();

  

    $result = mysqli_query($db, $qry);

    echo $result;
}


include_once('./assets/modules/header.php');

include_once "./assets/modules/navbar.php";

include_once "./assets/modules/footer.php";