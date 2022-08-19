<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITAK_mygoals</title>
</head>
<body>
    <?php
    echo "<h1>Check mygoals.txt file</h1>";
    $fileHandler = fopen("./myfiles/mygoals.txt", "w");// do not have to display the contents, use w no need w+, make fileHandler to pen file data in write mode
    $net = "Finish Mid-term\nFinish Final-term\nFinish Next Course Mid-term\nFinish Next Course Final-term\nGraduate Tamwood";//storing the goals in side the net and use \n to notice the program that this is the end of the line
    fwrite($fileHandler, $net);//write down information stored in net to handler
    fclose($fileHandler);// close the file
    ?>
</body>
</html>