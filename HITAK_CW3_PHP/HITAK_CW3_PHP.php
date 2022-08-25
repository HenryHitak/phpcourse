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
        $EmployeeID = $_POST['EmployeeID'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $Department = $_POST['Department'];
        $Salary = $_POST['Salary'];
        $email = $_POST['email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $idx = $_GET['idx'];
        $filehandler = fopen('../files/employeeData.json','r');
        $employeedb = json_decode(fread($filehandler,filesize('../files/employeeData.json')));
        fclose($filehandler);
        $employeedb[$idx]->EmployeeID = $EmployeeID;
        $employeedb[$idx]->first_name = $first_name;
        $employeedb[$idx]->last_name = $last_name;
        $employeedb[$idx]->Department = $Department;
        $employeedb[$idx]->Salary = $Salary;
        $employeedb[$idx]->email = $email;
        $employeedb[$idx]->Phone = $Phone;
        $employeedb[$idx]->Address = $Address;
        $filehandler = fopen('../files/employeeData.json','w');
        $stringData = json_encode($employeedb);
        fwrite($filehandler,$stringData);
        fclose($filehandler);
        header("Location: http://localhost/PHP/HITAK_CW3_PHP/HITAK_CW3_PHPjson.php");
    }
        if(isset($_GET['idx'])){
            $idx = $_GET['idx'];
            $filehandler = fopen('../files/employeeData.json','r');
            $employeedb = json_decode(fread($filehandler,filesize('../files/employeeData.json')));
            fclose($filehandler);
            echo "<form method='POST' action='".$_SERVER['PHP_SELF']."?idx=$idx'>";
            echo "<input name='EmployeeID' hidden value='".$employeedb[$idx]->EmployeeID."'/>";
            echo "<input name='first_name' value='".$employeedb[$idx]->first_name."'/>";
            echo "<input name='last_name' value='".$employeedb[$idx]->last_name."'/>";
            echo "<input name='Department' value='".$employeedb[$idx]->Department."'/>";
            echo "<input name='Salary' value='".$employeedb[$idx]->Salary."'/>";
            echo "<input name='email' value='".$employeedb[$idx]->email."'/>";
            echo "<input name='Phone' value='".$employeedb[$idx]->Phone."'/>";
            echo "<input name='Address' value='".$employeedb[$idx]->Address."'/>";
            echo "<button type='submit'>Save</button>";
            echo "</form>";
        }
        
    ?>
</body>
</html>