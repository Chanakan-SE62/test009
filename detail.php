<?php
    include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Infomation Page</h1>
        <hr>
        
        <table id="mytable" class="table table-bordered table-striped">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>picture</th>
            </thead>

            <tbody>

                <?php
                
                    $id = $_GET['id'];
                    $fetchdata = new DB_conn();
                   
                    $sql = $fetchdata->fetchdetail($id);
                    while ($row = mysqli_fetch_array($sql)) {

                ?>

                    <tr>
                        <td><?php echo $row['km_id']; ?></td>
                        <td><?php echo $row['km_name']; ?></td>
                        <td><img src="<?php echo $row['km_pic']; ?>" style="width: 300px;"></td>
                    </tr>

                <?php

                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>