<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mygoals_display</title>
</head>
<body>
    <?php
    $txtFile = "./myfiles/mygoals.txt"; // open file and save it into a variable
    if (!file_exists($txtFile)) {//if the file does not exist condition
      echo "No listed goals";
    } else { // when file exist open file 
      $fileHandler = fopen($txtFile, "r");
      echo "<ol>"; //start ol
      while (!feof($fileHandler)) {//go thru end of the file of each line
        echo "<li>". fgets($fileHandler). "</li>"; // and iterate these information to li, use fgets get each line information
    }
    echo "</ol>";//close of ol
    fclose($fileHandler);//close the file
    }
    ?>
</body>
</html>