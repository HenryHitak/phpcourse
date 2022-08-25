<?php
    $dbUsername = "root";
    $dbServername = "localhost";
    $dbPass = "";
    $dbname = "students_db";
        
    function createCookie($cookieName, $cookieValue, $exDay = 1){
        setcookie($cookieName, $cookieValue, time()+(86400*$exDay), "/");
    }
?>