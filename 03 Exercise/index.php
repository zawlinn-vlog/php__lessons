<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body class="p-5">

        <?php
            function doIt($name = 'Zawlinn'){
                return "My name is $name";
            }

           echo doIt() . "<br/>";
            echo doIt('Saram') . "<br/>";


        # passing by value and passing by refrence

        # Passing by value

        $a = 20;
        $b = $a;

        echo $a, $b;

        $a = 50;

        echo $a, $b;

        ?>
   

        <script src="./assets/js/app.js"></script>
    </body>
</html>