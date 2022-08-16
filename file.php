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
        // $fileHandler = fopen('./files/name.txt','r') or die('<script>alert("Unable to open the file!!")</script>');

        // echo fread($fileHandler,filesize('./files/name.txt')); 
        // fgets reads a line -- i.e. it will stop at a newline.  with fwrite option cannot fread. with a - append add new lines
        // fread reads raw data -- it will stop after a specified (or default) number of bytes, independently of any newline that might or might not be present.

        // fclose($fileHandler);
        // echo "<ul>";
        // while(!feof($fileHandler)){
        //     echo "<li>".fgets($fileHandler)."</li>"."<BR>";
        // }
        // fclose($fileHandler);
        // echo "</ul>";
        $fileHandler = fopen('./files/name.txt','a+');
        fwrite($fileHandler,"New line\n");
        rewind($fileHandler); // reset the position if the file pointer
        echo fread($fileHandler,filesize('./files/name.txt'));
        fclose($fileHandler);
    ?>
</body>
</html>