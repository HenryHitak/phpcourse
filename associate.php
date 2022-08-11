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
        $friends = array("Alyce","Akane","Matheus","LinWen","Mamiko");
        $students = array("Nak"=>[80,90,90],"Kathleen"=>[75,90,100],"Jiwon"=>[80,90,90],"Marcelo"=>[90,50,10]);//can use index to show index
        $students ["Henry"] = [10,10,10];
        echo "<h3> Kathleen's score is: ".$students['Kathleen'][2]."</h3>"; //think about making dynamic with select tag
        foreach($students as $key=>$value){
            // echo "<h4>$key:$value</h4>";
            echo "<h4>$key : ";
            foreach($value as $score){
                    echo "$score,";
            }
            echo "</h4>";
        };
        foreach($friends as $key=>$value){
            echo "<h4>$key:$value</h4>";
        };
        print_r($students);
        echo "<br>";
        echo "<hr>";        
        $songs = array("Post"=>["lie","don't lie","liar"],"Mamiko"=>["lie","don't lie","liar"],"Jiwon"=>["lie","don't lie","liar"],"Marcelo"=>["lie","don't lie","liar"]);
        // echo "<h3> My favourite song is : ".$songs['Post']."</h3>"; //think about making dynamic with select tag
        foreach($songs as $key=>$value){
            echo "<h4>$key:</h4>";
            foreach($value as $songs){
                echo "$songs,";
            }
        };
        
    ?>
</body>
</html>