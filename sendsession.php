<h1>Second Page</h1>
<?php
    session_start();
    // include './session.php';
    echo "<h1>".$_SESSION['name']."</h1>";

?>
