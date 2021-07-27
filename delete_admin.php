<!--Bismillahir Rahmanir Rahim-->

<?php

include 'function.php';   

$delete= new crud();       ////// creating a object 



if(isset($_POST['btn'])){
    $delete->delete($_POST['id']);
   
}

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
    

    <div class="crud crud_1">
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

        <div class="crud_form">
            <h2>Delete Information</h2>


            <form action="#" method="post">


                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
    
                      <input type="number" name="id" class="form-control" id="colFormLabel" placeholder="ID">
    
                    </div>
                </div>

                
                <input type="submit" value="  DELETE  " name="btn" class="btn btn-danger" name="" id="" style="    margin: 19px 25px 42px 105px;">


            </form>
             
           


        </div>
    </div>





</body>
</html>