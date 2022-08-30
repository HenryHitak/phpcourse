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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="EmployeeID" placeholder="Employee ID"/>
        <input type="text" name="first_name" placeholder="write the first name"/>
        <input type="text" name="last_name" placeholder="write the last name"/>
        <input type="text" name="Department" placeholder="write the department"/>
        <input type="text" name="Salary" placeholder="write the salary"/>
        <input type="email" name="email" placeholder="write the email"/>
        <input type="tel" name="Phone" placeholder="write the Phone"/>
        <input type="text" name="Address" placeholder="write the Address"/>
        <button type="submit">Add/Save</button>
    </form>
    <?php
        function loadData($employeeData){
            echo "<table><thead><tr><th>EmployeeID</th><th>First Name</th><th>Last Name</th><th>Department</th><th>Salary</th><th>Email</th><th>Phone</th><th>Address</th></tr></thead>";
            foreach($employeeData as $idx=>$employee){
                echo "<tbody><tr>";
                echo "<td>$employee->EmployeeID</td><td>$employee->first_name</td><td>$employee->last_name</td><td>$employee->Department</td><td>$employee->Salary</td><td>$employee->email</td><td>$employee->Phone</td><td>$employee->Address</td><td><a href='./HITAK_CW4_PHP.php?idx=$idx'.'?action=exit'>Edit</a></td><td><a href='./HITAK_CW4_PHPjson.php?idx=$idx'>Delete</a></td>";
            }
            echo "</tr></tbody></table>";
        }
        $fileHandler = fopen('../files/employeeData.json','r');
        $data = fread($fileHandler,filesize('../files/employeeData.json'));
        fclose($fileHandler);
        $employeeData = json_decode($data);
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $employeedb['EmployeeID'] = $_POST['EmployeeID'];
            $employeedb['first_name'] = $_POST['first_name'];
            $employeedb['last_name'] = $_POST['last_name'];
            $employeedb['Department'] = $_POST['Department'];
            $employeedb['Salary'] = (float)$_POST['Salary'];
            $employeedb['email'] = $_POST['email'];
            $employeedb['Phone'] = $_POST['Phone'];
            $employeedb['Address'] = $_POST['Address'];
            array_push($employeeData,$employeedb);
            $newData = json_encode($employeeData);
            $fileHandler = fopen('../files/employeeData.json','w');
            fwrite($fileHandler,$newData);
            fclose($fileHandler);
            loadData(json_decode($newData));
        }else{
            loadData($employeeData);
        }
        
        function deljson($path,$newData){
            $fileHandler = fopen($path,'w');
            $writeData = json_encode($newData);
            fwrite($fileHandler,$writeData);
            fclose($fileHandler);
        }
        if(isset($_GET['idx'])){ 
            $idx = $_GET['idx'];
            array_splice($employeeData,$idx,1);
            deljson('../files/employeeData.json',$employeeData);
            loadData($employeeData);
        } 
        if($_SERVER['REQUEST_METHOD']=="POST"){
                $_SESSION['session_timeout'] = time() + 10;
                header("Location: http://localhost/php/HITAK_CW4_PHP/HITAK_CW4_PHP.php");
            }


    ?>
</body>
</html>