<?php include './config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
        <input name="cName" type="text" required>
        <input name="length" type="number" max="127" required>
        <input name="cImg" type="file" required>
        <button type="submit">Register</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $cName = $_POST['cName'];
            $length = $_POST['length'];
            // $imgDest = './files/img/';
            $img = $_FILES['cImg'];
            $sourceFileDetails = pathinfo($img['name'])['extension'];
            $imgDest = "./files/img/".str_replace(" ","_",$cName)."img.".$sourceFileDetails;
            $allowed = array("jpg", "jpeg", "bmp");
            if(in_array($sourceFileDetails,$allowed) && getimagesize($img['tmp_name'])){
                if($img['size']<10000000){
                    if(move_uploaded_file($img['tmp_name'],$imgDest.$img['name'])){
                            $dbCon = new mysqli($dbServername, $dbUsername, $dbPass, $dbname);
                            if($dbCon -> connect_error){
                                die("connection error ".$dbCon->connect_error);
                            }else{
                                echo "Connected";
                                $insertCmd = "INSERT INTO course_tb (coursename,length,course_img) VALUES ('$cName','$length','$imgDest')";
                                $result = $dbCon-> query($insertCmd);
                                if($result === true){//check the value and type
                                    echo "<h1 style ='color: green;'> DONE!!</h1>";
                                }else{
                                    echo "<h1 style ='color: red;'>".$dbCon->error."</h1>";
                                }
                                $dbCon -> close();
                            }
                            echo "<h1 style='color:green;'>".$sourceFileDetails." has been uploaded in " .$img['tmp_name']."!!!!</h1>";
                        }else{
                            echo "<h1 style='color:red;'>".$sourceFileDetails." error uploading.SAD</h1>";
                        }
                    }else{
                        echo "<h1 style='color:red;'>Image is too big</h1>";
                    }
            }else{
                echo "<h1 style='color:red;'>Please Upload an Image</h1>";
            }
        }
    ?>
</body>
</html>