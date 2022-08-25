<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type='text' name ="fname" placeholder="First Name" required>
        <input  type='text' name ="lname" placeholder="Last Name" required>
        <input  type='email' name ="email" placeholder="Email" required>
        <input type ="date" name ="dob" placeholder="Date of Birth" required>
        <input type ="password" name ="pass" placeholder="Password" required>
        <input  type='text' name ="phone" placeholder="Phone" required>
        <input  type='text' name ="addr" placeholder="Address" required>
        <button type="sumbit" required>Register</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $dbUsername = "root";
        $dbServername = "localhost";
        $dbPass = "";
        $dbname = "students_db";
        $dbCon = new mysqli($dbServername, $dbUsername, $dbPass, $dbname);
        if($dbCon -> connect_error){
            die("connection error ".$dbCon->connect_error);
        }else{
            echo "Connected";
            $insertCmd = "INSERT INTO user_tb (firstName, lastName, email, password, dob, phone, addr, salt) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['pass']."', '".$_POST['dob']."', '".$_POST['phone']."', '".$_POST['addr']."','salt')";
            $result = $dbCon-> query($insertCmd);

            if($result === true){//check the value and type
                echo "<h1 style ='color: green;'> DONE!!</h1>";
            }else{
                echo "<h1 style ='color: red;'>".$dbCon->error."</h1>";
            }
            $dbCon -> close();
        }
    }

    ?>

</body>
</html>