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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="username" type="email"/>
        <input name="pass" type="password"/>
        <button type="submit">Login</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $dbcon = new mysqli($dbServername,$dbUsername,$dbPass,$dbname);
            if($dbcon->connect_error){
                die("Error: ".$dbcon->connect_error);
            }else{
                $selectCmd = "SELECT * FROM `user_tb` WHERE email='$username' AND pass='$pass';";
                $result = $dbcon->query($selectCmd);
                if($result->num_rows > 0){
                    $user = $result->fetch_assoc();
                    $_SESSION['user'] = $user;
                    $dbcon->close();
                    $_SESSION['timeout'] = time() + 10;
                    header("Location: http://localhost/PHP_G1/welcome.php");
                    
                }else{
                    echo "User not valid";
                }
                $dbcon->close();
            }
        }
    ?>
</body>
</html>