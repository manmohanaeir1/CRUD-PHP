<?php
     //$stu_id = $_POST['s_id'];
     $stu_name = $_POST['s_name'];
     $stu_address = $_POST['s_address'];
    $stu_class = $_POST['s_class'];
     $stu_phone = $_POST['s_phone'];
     $stu_email = $_POST['s_email'];
    
   $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failled");

        $sql = "UPDATE student SET s_name = '{$stu_name}' , s_address= '{$stu_address}' , s_class = '{$stu_class}', s_phone= '{$stu_phone}', s_email= '{$stu_email}'
         WHERE s_phone =  {$stu_phone} ";

        $result = mysqli_query($conn, $sql) or die("query unsucecs");

        header("Location: http://Localhost/CURD/CRUD-PHP/index.php");

        mysqli_close($conn);

?>  