<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gallery{
            display: flex;
        }
        img{
            width: 300px;
            height: 150px;
            padding: 1%;
        }
    </style>
</head>
<body>
    
    <div class="gallery"> 
    <?php
        // create a php file which is able to display all the images inside "img" directory. And if there's no picture show "No image has been uploaded yet" message
        $imgDirectory = scandir('./img');
        $flag = false;
        foreach($imgDirectory as $img){
            if($img == "." || $img == ".."){
                continue;
            }
            $imgAddr = './img/'.$img;
            if(getimagesize($imgAddr)){
                $flag = true;
                echo "<img src='$imgAddr' />";
            }
            else{
                echo "No image has been uploaded yet!!";
            }
        }
        if(!$flag){
            echo "<h1 style='color:red;'>No image has been uploaded yet</h1>";
        }
    ?>
    </div>
</body>
</html>