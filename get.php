<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fname" placeholder="Write your first name">
        <input type="text" name="lname" placeholder="Write your first name">
        <button type="submit">Submit</button>
    </form>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fname" placeholder="Write your first name">
        <input type="text" name="lname" placeholder="Write your first name">
        <button type="submit">Submit</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            if($fname!=""&& $lname!=""){
                echo "Your name is : $fname $lname";
            }else{
                echo "Write your firstname and last name ";
            }
        }elseif($_SERVER['REQUEST_METHOD']=='GET'){ //first default is GET so shows welcome when it's running
            echo "WELCOME";
        }
        if(isset($_GET['fname'])){ // for 'get' method
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            echo "Your name is: $fname $lname";
        };
        // 아래의 경우로 했을경우 처음 시작에 err가 나타남
        // $fname = $_GET['fname'];
        // $lname = $_GET['lname'];
        // echo "Your name is: $fname $lname";
        switch($_SERVER['REQUEST_METHOD']){
            case "POST":
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                if($fname!=""&& $lname!=""){
                echo "Your name is : $fname $lname";
            }else{
                echo "Write your firstname and last name ";
            }
            break;
            case "GET":
                echo "WELCOME";
            break;
        }
        
    ?>
</body>
</html>