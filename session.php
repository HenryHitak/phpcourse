    <?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>First Page</h1>
    <a href="./sendsession.php">second page</a>
    <!-- create 2 pgs, 1: send your first and last name to the second page. Using session -->
    <?php
        $_SESSION['name'] = "Hitak";
        // echo "<h1>".$_SESSION['name']."</h1>";

    ?>
</body>
</html>