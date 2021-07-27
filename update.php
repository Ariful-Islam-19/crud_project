<!--Bismillahir Rahmanir Rahim-->

<?php


include 'function.php';
$obj=new crud();                ////creating object

$result=$obj->class();

/*echo "<pre>";
print_r($_GET);
var_dump($_GET);
echo "</pre>";
*/

if($_GET['status']=='edit'){
    $update=$obj->update($_GET['id']);
    $update=mysqli_fetch_assoc($update);
    
}

if(isset($_POST['btn'])){
    $sname=$_POST['name'];
    $saddres=$_POST['address'];
    $sclass=$_POST['class'];
    $sphone=$_POST['phone'];
    $sid=$_GET['id'];  ////// taking id using get method

    $form=array("$sname","$saddres","$sphone",$sclass);
    $colum=array("name","address","phone","class");

    for($i=0;$i<count($form);$i++){
        if($form[$i]=="")$form[$i]=$update[$colum[$i]];  //// asigning empty $form
    }
    $form[count($form)]=$sid;

    $obj->edit($form);    //// calling edit function from function.php page


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
            <h2>update Information</h2>


            <form action="#" method="post">


                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">NAME</label>
                    <div class="col-sm-10">
    
                        <input type="text" name="name" class="form-control" id="colFormLabel" placeholder="<?php echo $update['name'] ?>">
    
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">ADDRESS</label>
                    <div class="col-sm-10">
    
                      <input type="text" name="address" class="form-control" id="colFormLabel" placeholder="<?php echo $update['address'] ?>">
    
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">CLASS</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="class" aria-label="Default select example">
                            <option value="<?php echo $update['cid']  ?>" selected><?php echo $update['cclass']  ?></option>
                            <?php
                            while($row=mysqli_fetch_assoc($result)) { ?>
                            <?php  if($row['cid']!=$update['cid'] ) { ?>
                            <option value="<?php echo $row['cid'] ?>"><?php echo $row['cclass'] ?></option>
                            <?php  } ?>
                            <?php } ?>

                          </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">PHONE</label>
                    <div class="col-sm-10">
    
                      <input type="number" name="phone" class="form-control" id="colFormLabel" placeholder="<?php echo $update['phone'] ?>">
                      <input type="hidden" name="id" class="form-control" id="colFormLabel"> <!--hidden input fields -->
    
                    </div>
                </div>

                <input type="submit" value="  SAVE  " class="btn btn-dark" name="btn" id="" style="    margin: 19px 25px 42px 105px;">


            </form>

              
           


        </div>
    </div>





</body>
</html>