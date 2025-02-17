<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <?php

            $createFile = false;
            $dataString = '';

            if(isset($_REQUEST["create"])){
                echo !$createFile;
            }
            if(isset($_REQUEST["open"])){
                echo "File is opened.";
            }
            if(isset($_REQUEST["apply"])){
                echo "File is applied.";
            }

        ?>
        <div class="row gap-4">
            <div class="col p-3">
                <form action="<?php $_PHP_SELF ?>" method="POST" class="form-create">
                    <h3 class="text-primary mb-5">Create, Read and Apply File &mdash;</h3>
                    <div class="form-floating">
                        <textarea name="comment" id="comment" class="form-control" style="resize:none; height: 10rem" ></textarea>
                        <label for="comment">Comments</label>
                    </div>

                    <div class="d-flex gap-3 mt-4 justify-content-end">
                        <button class="btn btn-primary" type="submit" name="create">Create File</button>
                        <button class="btn btn-primary" type="submit" name="open">Read File</button>
                        <button class="btn btn-primary" type="submit" name="apply">Apply File</button>
                    </div>
                </form>
            </div>
            <div class="col border border-primary rounded p-3">
                <h3 class="text-primary">Result &mdash;</h3>
                <ul class="mt-3 list-group">
                    <li class="list-group-item py-3 mb-3">
                        Create File : <span class="text-primary">Created</span>
                    </li>
                    <li class="list-group-item py-3 mb-3">
                        File Data : <span class="text-primary">Comments ...</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>