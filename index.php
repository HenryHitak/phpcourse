<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- echo:print this line always start by using ?php and end with ?  and each line when it is done with semicolon.
        $name--> 
        <!-- to concat two strings in one use . -->
    <?php

     $name = "Hitak";
     $country = "Korea";
     $hobby = "hobbyyyyyyyyy";
     $name1 = "Milad";
     $first = 100;
     $second = 100;
     $sum = $first + $second;
     $div = $sum/2;     
     echo "Hello World","<h1>Hitak Lee</h1>","<h4>Korea</h4>","<h5>Hobby</h5>";
     echo "Hello World <h1>Hitak Lee</h1><h4>Korea</h4><h5>Hobby</h5>";
     echo "<h1>Hitak Lee</h1>";
     echo "<h4>My name is :$name</h4><h4>I am from: $country</h4><h4>There is no $hobby</h4>";
     echo  $sum/2;
     echo $div;
     echo "<h1> My avg is: ".$div."</h1>"; //use . like +
     echo "<h1> My avg is: ".($sum/2)."</h1>"

    ?>
</body>
</html>