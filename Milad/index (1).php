<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <?php
        $name = "Milad";//string
        $Course1 = 60;//integer
        $Course2 = 10.5; //Float
        $kindTeacher = false;//Boolean true/false
        $avg = ($Course1 + $Course2) / 2;
        $mod = ($Course1 + $Course2) % 2;
        $Course1 += 1; // $Course1 = $course1 + 1
        $Course1 += $Course2;//$course1 = $course1 + $course2
        $Course2 %= 20;//$course2 = $course2 % 20;
        $family = "Torabi";
        $name .= $family;
        echo $name;
        echo "<h1>Hello World</h1>";
        echo "<h2>My name is: $name</h2>";
        echo "<h1>".(($Course1 + $Course2) / 2)."</h1>";
        echo "<h1>Mod: $mod</h1>";
    ?>
</body>
</html>