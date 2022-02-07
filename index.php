<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <style>
        #btn {
            padding: 60px 10px 0px 500px;
        }
        .card {
            height: 100%;
            margin-top: 10px;
        }
        img {
            height: 60%;
        }
        h6 {
            margin-top: 5px;
        }
        .btn {
            border-radius: 15px
        }
        .btn-success {
            margin: 60px 0 0 500px;
            width: 120px;
        }

    </style>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-5">Infomation Page</h1>
            </div>
            <div class="col-6">
                <a href="insert.php" class="btn btn-success">Add</a>
            </div>
        </div>
        
        <hr>

        <div class="row">
            <?php
                include_once('functions.php');
                $fetchdata = new DB_conn();
                $sql = $fetchdata->fetchdata();
                while ($row = mysqli_fetch_array($sql)) {

            ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $row['group_pic']; ?>" class="card-img-top" alt="...">
                            
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $row['group_name']; ?></h6>
                            <a href="detail.php?id=<?php echo $row['group_id']; ?>" class="btn btn-primary">View</a>
                            <a href="update.php?id=<?php echo $row['group_id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?del=<?php echo $row['group_id']; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                
                
            <?php

                }
            ?>

        </div>
            
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>