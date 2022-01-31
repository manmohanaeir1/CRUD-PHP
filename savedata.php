<?php

   $stu_name = $_POST['s_name'];
    $stu_address = $_POST['s_address'];
    $stu_class = $_POST['s_class'];
    $stu_phone = $_POST['s_phone'];
    $stu_email = $_POST['s_email'];
    
   $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failled");

        $sql = "INSERT INTO student(s_name, s_address, s_class, s_phone, s_email)
        VALUE('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}', '{$stu_email}')";

        $result = mysqli_query($conn, $sql) or die("query unsucecs");

        header("Location: http://Localhost/CURD/CRUD-PHP/index.php");

        mysqli_close($conn);

?>