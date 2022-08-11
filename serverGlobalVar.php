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
        echo "Current file name is: " .$_SERVER["PHP_SELF"];
        echo "<br><br>Server name is: " .$_SERVER["SERVER_NAME"];
        echo "<br><br>IP Address is: " .$_SERVER["REMOTE_ADDR"];
        echo "<br><br>IP Address is: " .$_SERVER["SERVER_PORT"];
        echo "<br><br>IP Address is: " .$_SERVER["REMOTE_PORT"];
        echo "<br><br>IP Address is: " .$_SERVER["SERVER_ADMIN"];

    ?>
</body>
</html>