<?php
    $GLOBALS['dbUsername'] = "root";
    $GLOBALS['dbServername'] = "localhost";
    $GLOBALS['dbpass'] = "";
    $GLOBALS['dbName'] = "students_db";
    session_start();
    function db_connect($databaseName = 'students_db'){
        $dbCon = new mysqli($GLOBALS['dbServername'],$GLOBALS['dbUsername'],$GLOBALS['dbPass'],$databaseName);
        if($dbCon->connect_error){
            echo "<h1>Connection Error</h1>";
            return false;
        }
        else{
            return $dbCon;
        }
    }

    function find_username($tableName, $fieldname, $username){
        $dbCon = db_connect();
        if(db_connect()!==false){
            $select = "SELECT * FROM $tableName WHERE $fieldname ='$username'";
            $result = $dbCon->query($select);
            if($result->num_rows>0){
                $user = $result->fetch_assoc();
                $dbCon->close();
                return $user;
            }else{
                $dbCon->close();
                return false;
            }

        }
    }
    function Santize_input($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
?>