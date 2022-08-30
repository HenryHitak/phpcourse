<?php
    include './config.php';
    if(isset($_GET['id']) && isset($_GET['action'])){
        session_start();
        $id = $_GET['id'];
        $dbCon = new mysqli($dbServername,$dbUsername,$dbPass,$dbname);
        if($dbCon->connect_error){
            die("Connection error");
        }
        else{
            switch($_GET['action']){
                case "del":
                    $delCmd = "DELETE FROM user_tb WHERE user_id = $id";
                    if($dbCon -> query($delCmd) === true){
                        echo "<h1>Data deleted</h1>";
                    }
                    else{
                        echo "<h1>Action failed</h1>";
                    }
                    break;
                case "edit":
                    $selectuser = "SELECT * FROM user_tb WHERE user_id = $id";
                    $result = $dbCon -> query($selectuser);
                    $_SESSION['userData'] = $result->fetch_assoc();
                    header("Location: http://localhost/PHP/userEdit.php");

            }
            $dbCon->close();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn{
            text-decoration: none;
            color: black;
            padding: 10px 12px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: blanchedalmond;
        }
        .btn:hover{
            background-color: gainsboro;
        }
        td{
            padding: 20px 2px;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>email</th>
                <th>Date of Birth</th>
                <th>Phone</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $dbCon = new mysqli($dbServername,$dbUsername,$dbPass,$dbname);
                if($dbCon->connect_error){
                    die("Connection error");
                }
                else{
                    $selectCmd = "SELECT * FROM user_tb";
                    $result = $dbCon->query($selectCmd);
                    $users = [];
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['user_id']."</td>";
                        echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['dob']."</td>";
                        echo "<td>".$row['phone']."</td>";
                        echo "<td><a class='btn' href='".$_SERVER['PHP_SELF']."?id=".$row['user_id']."&action=del'>Delete</a></td>";
                        echo "<td><a class='btn' href='".$_SERVER['PHP_SELF']."?id=".$row['user_id']."&action=edit'>Edit</a></td>";
                        echo "</tr>";
                    }
                    $dbCon->close();
                }
            ?>
        </tbody>
    </table>
</body>
</html>