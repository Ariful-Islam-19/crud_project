<?php
          //////    Bismillahir Rahmanir Rahim  /////////

    class crud{


        public $conn;

        public function __construct(){
            $this->conn= mysqli_connect("localhost","root","","crud") or die("Connection Fail");
        }

        public function class(){
           
            $query="SELECT * FROM student_class ";

            $result=mysqli_query($this->conn,$query) or die("Query Fail");

            return $result;

        }

        public function display(){
           
            $query="SELECT * FROM student_info,student_class WHERE student_info.class=student_class.cid";

            $result=mysqli_query($this->conn,$query) or die("Query Fail");

            return $result;

        }



        public function add($add){
            $query="INSERT INTO student_info(`name`, `address`, `phone`, `class`) VALUES('$add[0]','$add[1]','$add[3]','$add[2]')";

            $result=mysqli_query($this->conn,$query) or die("Query Fail");

            header("Location: http://localhost/php_all_project/create_read_update_delete/index.php"); ///// this function return us index.php page

        }


        public function update($update){
            $query="SELECT * FROM student_info,student_class WHERE student_info.class=student_class.cid AND student_info.id=$update";

            $result=mysqli_query($this->conn,$query) or die("Query Fail");

            return $result;

           
        }

        public function edit($edit){
            $query="UPDATE student_info SET `name`='$edit[0]', `address`='$edit[1]', `phone`='$edit[2]', `class`='$edit[3]' WHERE id=$edit[4]";

            $result=mysqli_query($this->conn,$query) or die("Query Fail");

            header("Location: http://localhost/php_all_project/create_read_update_delete/index.php"); ///// this function return us index.php page
           
        }

        public function delete($delete){
            $query="DELETE FROM student_info WHERE id=$delete";

            $result=mysqli_query($this->conn,$query) or die("Query Fail");

            header("Location: http://localhost/php_all_project/create_read_update_delete/index.php"); ///// this function return us index.php page


        }










    }


    $obj=new crud();
    $obj->display();












?>