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
        $weather = "rainy";
        echo "<h1>";
        if($weather == "Rainy"){
            echo "Take the umbrella";
        }elseif($weather == "Sunny"){
            echo "Take the Sunglass";
        }else{
            echo "Have Fun!";
        }
        echo "</h1>";
        $marks = array(78,76.5,80,50,45.7);
        $counter = 0;
        while($counter<5){
            echo "<h3>$marks[$counter]</h3>";
            $counter++;//$counter = $counter + 1
        }
        
    ?>
</body>
</html>