<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="fname" placeholder="Write your fName">
        <input type="text" name="lname" placeholder="Write your lName">
        <input type="text" name="desire" placeholder="Write your desire">
        <button type="submit">Write your wish</button>
    </form>
    <?php
        // if($_SERVER['REQUEST_METHOD']=="POST"){
        //     $fname = $_POST['fname'];
        //     $lname = $_POST['lname'];
        //     $desire = $_POST['desire'];
        //     $fileAddr = "./files/$fname"."_"."$lname";
        //     if(file_exists($fileAddr)){
        //         $fileHandler = fopen($fileAddr."/$fname$lname.txt", 'w')or die("Unable to create the file");
        //         fwrite($fileHandler, "Your Desire is: $desire");
        //         fclose($fileHandler);
        //     }else{
        //         if(mkdir($fileAddr)){
        //             $fileHandler = fopen($fileAddr."/$fname$lname.txt",'w') or die("Unable to create the file");
        //             fwrite($fileHandler,"Your Desire is: $desire");
        //             fclose($fileHandler);
        //         }else{
        //             echo "Error creating the directory.";
        //         }
        //     }
        // function addFile ($fname,$lname,$desire){
        //     $fname = $_POST['fname'];
        //     $lname = $_POST['lname'];
        //     $desire = $_POST['desire'];
        //     $fileAddr = "./files/$fname"."_"."$lname";
        //     if(file_exists($fileAddr)){
        //         $fileHandler = fopen($fileAddr."/$fname$lname.txt", 'w')or die("Unable to create the file");
        //         fwrite($fileHandler, "Your Desire is: $desire");
        //         fclose($fileHandler);
        //     }else{
        //         echo "Error creating the directory.";
        //     }
        // }
        // }
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $desire = $_POST['desire'];
        $fileAddr = "./files/$fname"."_".$lname;
        if(file_exists($fileAddr)){
            addFile($fileAddr,$fname,$lname,$desire);
        }
        else{
            if(mkdir($fileAddr)){
                addFile($fileAddr,$fname,$lname,$desire);
            }
            else{
                echo 'Error creating the directory';
            }
        }
        }

        function addFile($fileAddr,$fname,$lname,$desire){
        $fileHandler = fopen($fileAddr."/$fname$lname.txt",'w') or die('Unable to create the file');
        fwrite($fileHandler,"Your Desire is : $desire");
        fclose($fileHandler);
        }
    ?>
</body>
</html>