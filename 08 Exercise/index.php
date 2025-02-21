<?php


include_once ("./assets/modules/header.php");

include_once "./assets/modules/navbar.php";


?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
        <table class="table table-responsive table-hover caption-top">
            <caption>List of Members &mdash;</caption>

            <thead class="table-dark">
                <td>#ID</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Action</td>
            </thead>
            <tbody>
            
               <?php
                   

                   define('DB_HOST', 'localhost');
                   define('DB_USER', 'root');
                   define('DB_PASS', '');
                   define('DB_NAME', 'ohnmar');



                   function dbconnect(){

                        $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

                        if(!mysqli_connect_errno() > 0){
                            return $db;
                        }

                        die('Connection Fail!');
                   }


                   function showAllData(){
                    $qry = "SELECT id, fullname, username,email FROM members";

                    $db = dbconnect();


                    $result = mysqli_query($db, $qry);

                    if(mysqli_num_rows($result) > 0){

                       

                        foreach($result as $member){
                            $doc = "<tr>";
                                foreach($member as $item){
                                    $doc .= "<td>" . $item . "</td>";
                                }

                            $doc .= "<td class='d-flex gap-2'> <button class='btn btn-danger '> Delete </button><button class='btn btn-primary '> Edit </button> </td>";
                            $doc .= "</tr>";
                            echo $doc;

                        }

                        
                    }
                   }

                  if(isset($_SESSION['email'])){
                    showAllData();
                  }


                   function errchk($db){
                    echo "<pre>" . print_r($db, true) . "</pre>";
                   }


               ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

<?php

include_once "./assets/modules/footer.php";

?>
