<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include './config.php';
        if(!isset($_COOKIE['firstname'],$_COOKIE['lastname'],$expDay)){
            createCookie('firstname','Hitak',2);
            createCookie('lastname','Lee',2);
        }
        if(isset($_COOKIE['firstname'],$_COOKIE['lastname'],$expDay)){
            echo "<h1>Cookie info: ".$_COOKIE['firstname']." ". $_COOKIE['lastname']."</h1>";
            echo "<h1>First name: ".$_COOKIE['firstname']."</h1>";
            echo "<h1>Last name: ".$_COOKIE['lastname']."</h1>";
            echo "<h1>You have: ".$_COOKIE['expDay']. "days";
        }
        else{
            echo "<h1>THERE IS NO COOKIE!</h1>";
            
        }
    ?>
</body>
</html>