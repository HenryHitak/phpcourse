<?php
    include './config.php';
    $dbCon = new mysqli($dbServername, $dbUsername, $dbPass, $dbname);
    $courseArray = [];
    if($dbCon -> connect_error){
        die("connection error ");
    }else{
        $selectCmd = "SELECT * FROM course_tb";
        $result = $dbCon->query($selectCmd);
        while($row = $result->fetch_assoc()){
            array_push($courseArray,$row);
        }
        $dbCon -> close();
    }
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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
        <input name="className" type="text" required placeholder="write class name">
        <select name="selectCourse">
            <?php
                foreach($courseArray as $index=>$course){
                    echo "<option value='".$index."'>".$course['coursename']."</option>";
                }
            ?>
        </select>
        <input type="date" name="startDate" required>        
        <button type="submit">Register</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $classname = $_POST['className'];
            $courseIndex = $_POST['selectCourse'];
            $startDate=strtotime($_POST['startDate']);
            $length = $courseArray[$courseIndex]['length'];
            $days = 86400 * ($length /4 *7) -(4*86400);
            $endDate = date("Y-m-d",$startDate+$days);
            $dbCon = new mysqli($dbServername, $dbUsername, $dbPass, $dbname);
            if($dbCon -> connect_error){
                die("Connection error");
            }else{
                $insertCmd = "INSERT INTO class_tb (start_date,end_date,class_name,course_id) VALUES ('$startDate','$endDate','$classname','".$courseArray[$courseIndex]['course_id']."')";
                if($dbCon->query($insertCmd)){
                    echo "<h1>Class added!</h1>";
                }else{
                    echo "<h1>Oops something is wrong</h1>";
                }
                $dbCon -> close();
            }
        }
    ?>
</body>
</html>