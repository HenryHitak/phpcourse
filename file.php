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
        //         'r'	Open for reading only; place the file pointer at the beginning of the file.
        // 'r+'	Open for reading and writing; place the file pointer at the beginning of the file.
        // 'w'	Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
        // 'w+'	Open for reading and writing; otherwise it has the same behavior as 'w'.
        // 'a'	Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
        // 'a+'	Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
        // 'x'	Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail by returning false and generating an error of level E_WARNING. If the file does not exist, attempt to create it. This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
        // 'x+'	Create and open for reading and writing; otherwise it has the same behavior as 'x'.
        // 'c'	Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the file. This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using 'w' could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested).
        // 'c+'	Open the file for reading and writing; otherwise it has the same behavior as 'c'.
        // 'e'	Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.
        $fileHandler = fopen('./files/name.txt','a+');
        fwrite($fileHandler,"New line\n");
        rewind($fileHandler); // reset the position if the file pointer
        echo fread($fileHandler,filesize('./files/name.txt'));
        fclose($fileHandler);
    ?>
</body>
</html>