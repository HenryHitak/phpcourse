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
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $grade = $_POST['grade'];
        $idx = $_GET['idx'];
        $filehandler = fopen('./files/MOCK_DATA.json','r');
        $studentData = json_decode(fread($filehandler,filesize('./files/MOCK_DATA.json')));
        fclose($filehandler);
        $studentData[$idx]->first_name = $fname;
        $studentData[$idx]->last_name = $lname;
        $studentData[$idx]->grade = $grade;
        $filehandler = fopen('./files/MOCK_DATA.json','w');
        $stringData = json_encode($studentData);
        fwrite($filehandler,$stringData);
        fclose($filehandler);
        header("Location: http://localhost/php/json.php");
    }
        if(isset($_GET['idx'])){
            $idx = $_GET['idx'];
            $filehandler = fopen('./files/MOCK_DATA.json','r');
            $studentData = json_decode(fread($filehandler,filesize('./files/MOCK_DATA.json')));
            fclose($filehandler);
            echo "<form method='POST' action='".$_SERVER['PHP_SELF']."?idx=$idx'>";
            echo "<input name='fname' value='".$studentData[$idx]->first_name."'/>";
            echo "<input name='lname' value='".$studentData[$idx]->last_name."'/>";
            echo "<input name='grade' value='".$studentData[$idx]->grade."'/>";
            echo "<button type='submit'>Save</button>";
            echo "</form>";
        }
    $json = json_decode($data);
 
    unset($json[$idx]);
 
    $json = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents('./files/MOCK_DATA.json', $json);
 
    header("Location: http://localhost/php/json.php");
    //     if($_SERVER['REQUEST_METHOD']=="POST"){
    //     echo $_POST['fname'];
    //     echo $_POST['lname'];
    //     echo $_POST['grade'];
    //     $idx=$_GET['$idx'];
    //     $fileHandler = fopen('./files/MOCK_DATA.json','r');
    //     $studentData = json_decode(fread($filehandler,filesize('./files/MOCK_DATA.json')));
    //     fclose($fileHandler);
    //     $studentData[$idx]->first_name = $fname;
    //     $studentData[$idx]->last_name = $lname;
    //     $studentData[$idx]->grade = $grade;
    //     $fileHandler = fopen('./files/MOCK_DATA.json','w');
    //     $stringData = json_encode(fread($filehandler,filesize('./files/MOCK_DATA.json')));
    //     fwrite($fileHandler,$stingData);
    //     fclose($fileHandler);
    //     header("Location: http://localhost/php/json.php");
    // }
    // if(isset($_GET['idx'])){
    //     $idx=$_GET['idx'];
    //     $fileHandler = fopen('./files/MOCK_DATA.json','r');
    //     $studentData = json_decode(fread($filehandler,filesize('./files/MOCK_DATA.json')));
    //     fclose($fileHandler);
    //     echo "<form method='POST' action='".$_SERVER['PHP_SELF']."?idx=$idx'>";
    //     echo "<input name='fname' value='".$studentData[$idx]->first_name."'/>";
    //     echo "<input name='fname' value='".$studentData[$idx]->last_name."'/>";
    //     echo "<input name='fname' value='".$studentData[$idx]->grade."'/>";
    //     echo "<button type = 'submit'>Save</button>";
    //     echo "</form>";
    // }
    ?>
</body>
</html>