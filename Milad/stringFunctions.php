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
        $name = "Jiwon Lee";
        echo "Length: ".strlen($name)."</br>";
        echo "Word Count: ".str_word_count($name)."</br>";
        echo "String reverse: ".strrev($name)."</br>";
        echo "Find a position: ".strpos($name,"Lee")."</br>";
        echo "Replacing a string: ".str_replace("Lee","Ken",$name)."</br>";
        echo "Return a substring: ".substr($name,strpos($name,"Lee"),strlen("Lee"))."</br>";
        echo $name."</br>";//the main string will never change using the above functions
        //getter & setter to change the property
        for($idx=0;$idx<strlen($name);$idx++){
            echo $name[$idx]."</br>";
        }

    ?>
</body>
</html>