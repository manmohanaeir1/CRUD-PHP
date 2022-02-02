<?php
    $stu_id = $_GET['id'];

   include 'config.php';
   $sql = "DELETE FROM student WHERE s_id ={$stu_id}";
   $result = mysqli_query($conn, $sql) or die("query unsucecs");
   header("Location: http://Localhost/CURD/CRUD-PHP/index.php");
   
   mysqli_close($conn);
?>