<?php 
    include './config.php';
    session_start();
?>

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
        <input type='email' name ="email" placeholder="email" required>
        <input type ="password" name ="pass" placeholder="Password" required>
        <button type="sumbit" required>Log in</button>
    </form>
    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $username = $_POST['email'];
            $pass = $_POST['pass'];
            $dbcon = new mysqli($dbServername, $dbUsername, $dbPass, $dbname);
            if($dbcon->connect_error){
                die ("Error: ".$dbcon->connet_error);
            }else{
                $selectCmd = "SELECT * FROM `user_tb` WHERE email='$username';";
                $result = $dbcon->query($selectCmd);
                if($result-> num_rows>0){
                    $user = $result->fetch_assoc();
                    $hashedPass = $user['password'];
                    if(password_verify($pass,$hashedPass)){                        
                        $_SESSION['user']=$user;
                        $dbcon->close();
                        $_SESSION['session_timeout'] = time() + 10;
                        header("Location: http://localhost/php/welcome.php");
                    }else{
                        echo "user valid";
                    }
                }else{
                    echo "not valid";
                }
                $dbcon -> close();
            }    
        }

    ?>

</body>
</html>