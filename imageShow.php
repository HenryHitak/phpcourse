<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <input type="file" name="profileImage"/>
        <button type="submit">Upload</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $destDir = './img/';
            $sourceFile = $_FILES['profileImage'];
            $sourceFileDetails = pathinfo($sourceFile['name']);
            $allowed = array("jpg", "jpeg", "bmp");
            if(in_array($sourceFileDetails['extension'],$allowed) && getimagesize($sourceFile['tmp_name'])){
                if($sourceFile['size']<1000000){
                    if(move_uploaded_file($sourceFile['tmp_name'],$destDir.$sourceFile['name'])){
                        echo "<h1 style='color:green;'>".$sourceFileDetails['filename']." has been uploaded!!!!</h1>";
                        echo "<img src='./img/$sourceFileDetails' width=250px>";
                    }else{
                        echo "<h1 style='color:red;'>".$sourceFileDetails['filename']." No Image has been uploaded</h1>";
                    }
                }else{
                    echo "<h1 style='color:red;'>Image is too big</h1>";
                }
            }else{
                echo "<h1 style='color:red;'>No Image has been uploaded</h1>";
            }
        }
    ?>
</body>
</html>