<?php
session_start();
include 'conn.php';
$name= $_POST["name"];
$pass= $_POST["pass"];
$sql = "select * from admin where userName = '$name' && password = '$pass'";
$result =mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)>0) {
                $_SESSION['adminName'] = $name;
                header("location:home.php");
                
            } else {
                header("location:login.html");
            }
?>