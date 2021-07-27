<!--Bismillahir Rahmanir Rahim-->

<?php

include 'function.php';   

$display= new crud();       ////// creating a object 
$result= $display->display();     ///// calling display() function from function.php file



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    

    <div class="crud">
        <div class="crud_header">
            <h1>Create-Edit-Update-Delete</h1>
        </div>

        <div class="crud_menu">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="add.php">add</a></li>
                <li><a href="update_admin.php">update</a></li>
                <li><a href="delete_admin.php">delete</a></li>
            </ul>
        </div>

        <div class="crud_table">
            <h2>Stduent Information</h2>
            <table class="table table-hover table-striped">
            
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>CLASS</th>
                    <th>PHONE</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    <?php    
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                   <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['address'] ;?></td>
                      <td><?php echo $row['cclass']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td>
                       <a class="btn btn-primary" href="update.php?status=edit&&id=<?php echo $row['id']; ?>" role="button">Edit</a>
                       <a class="btn btn-danger" href="delete.php?status=delete&&id=<?php echo $row['id']; ?>" role="button">Delete</a>
                      </td>
                    </tr>

                    <?php } ?>

                </tbody>
                

              </table>





        </div>
    </div>





</body>
</html>