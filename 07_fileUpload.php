<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2022/8/17</title>
</head>
<body>
    

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <input type="file" name="profileImage"/>
        <button type="submit">Upload</button>
    </form>
    <?php

    $a = array("jpg","jpeg","bmp","png");

        if($_SERVER['REQUEST_METHOD']=="POST"){
            $destDir = './files/img/';
            $sourceFile = $_FILES['profileImage'];
            $sourceFileDetails = pathinfo($sourceFile['name']);
            // if($sourceFileDetails['extension']=="jpg" && getimagesize($sourceFile['tmp_name'])){
                if(array_search($sourceFileDetails['extension'],$a) && getimagesize($sourceFile['tmp_name'])){
                    if($sourceFile['size']<10000000){
                        if(move_uploaded_file($sourceFile['tmp_name'],$destDir.$sourceFile['name'])){
                            echo "<h1 style='color:green;'>".$sourceFileDetails['filename']." has been uploaded!!!!</h1>";
                        }else{
                            echo "<h1 style='color:red;'>".$sourceFileDetails['filename']." error uploading.SAD</h1>";
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