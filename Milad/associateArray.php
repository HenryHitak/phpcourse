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
        $friends = array("Henry","Akane","Milad","Juan","Mamiko");
        $students = array("Nak"=>[80,67,89],"Kathleen"=>[75,86,90],"Jiwon"=>[85,45,67],"Marcelo"=>[70,78,55]);
        $students["Henry"] = [40,10,15];
        echo "<h3> Kathleen score is: ".$students['Kathleen'][1]."</h3>";
        foreach($students as $key=>$value){
            echo "<h3>$key : ";
            foreach($value as $score){
                echo "$score, ";
            }
            echo "</h3>";
        };
        foreach($friends as $key=>$value){
            echo "<h4>$key : $value</h4>";
        }
        print_r($students);
        echo "<br/>";
        print_r($friends);
    ?>
</body>
</html>