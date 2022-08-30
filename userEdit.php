<?php
    include './config.php';
    session_start();
    if(!isset($_SESSION['userData'])){
        header("Location: http://localhost/php/userAdmin.php");
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
        form{
            width: 20%;
            display: flex;
            flex-direction: column;
        }
        button{
            width: fit-content;
            margin-top: 5%;
        }
    </style>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $dbcon = new mysqli($dbServername,$dbUsername,$dbPass,$dbname);
            $updateCmd = " UPDATE user_tb SET firstName='".$_POST['firstName']."',lastName='".$_POST['lastName']."',email='".$_POST['email']."', password='".$_POST['password']."',dob='".$_POST['dob']."',phone='".$_POST['phone']."',addr='".$_POST['addr']."', salt='".$_POST['salt']."', title='".$_POST['title']."' WHERE user_id=".$_SESSION['id'];
            if($dbcon -> query($updateCmd) === true){
                $dbcon -> close();
                unset($_SESSION['userData']);
                unset($_SESSION['id']);
                header("Location: http://localhost/php/userAdmin.php");
            }
        }
    ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
            foreach($_SESSION['userData'] as $fieldName => $value){  
                switch($fieldName){
                    case "dob":
                        $type = "date";
                        break;
                    case "email":
                        $type = "email";
                        break;
                    case "phone":
                        $type = "tel";
                        break;
                    case "password":
                        $type = "password";
                        break;
                    default:
                        $type = "text";
                }
                if($fieldName != "user_id"){
                    echo "<label for='fieldName'>$fieldName: </label>";
                    echo "<input type='$type' name='$fieldName' value='$value'/>";
                }
                else{
                    $_SESSION['id'] = $value;
                    echo "<h2>$fieldName: $value</h2>";
                }
            }
        ?>
        <button type="submit">Update</button>
    </form>
    <?php
        // print_r($_SESSION['userData']);
    ?>
</body>
</html>