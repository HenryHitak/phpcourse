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
    function nameDisplayer($name,$family,$country="Japan"){
        // echo "My name is $name $family, I am from $country</br>";
        return "My name is $name $family, I am from $country</br>";
    };
    // nameDisplayer("Hitak","Lee","Korea");
    echo(nameDisplayer("Hitak","Lee","Korea"));
    ?>
</body>
</html>