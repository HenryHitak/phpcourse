<?php
session_start();
//Check the session start time is set or not
if(!isset($_SESSION['start'])){
    //Set the session start time
    $_SESSION['start'] = time();
}
header("refresh: 1");
$date = date('d-m-y h:i:s');
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] >60)) {
    //Unset the session variables
    session_unset();
    //Destroy the session
    session_destroy();
    header("Location: http://localhost/php/HITAK_CW4_PHP/HITAK_CW4_PHPjson.php");
}else{
    echo "Expires in 60 sec.<br/>";
}
if(!isset($_SESSION['active_count'])){
    $_SESSION['active_count'] = 60;
    $_SESSION['time_started'] = time();
}
$now = time();
$final_remain_time = $now - $_SESSION['time_started'];
$remainingSeconds = abs($_SESSION['active_count'] - $final_remain_time);
echo "There are $remainingSeconds seconds remaining.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="startTime()">
    <div>
        <h4 id="txt"> Current Time</h4>
    </div>
    <a href="<?php echo $_SERVER['PHP_SELF'].'?action=exit'; ?>">Exit</a>
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
        header("Location: http://localhost/PHP/HITAK_CW4_PHP/HITAK_CW4_PHP.php");
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
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch($action){
            case "exit":
                session_unset();
                session_destroy();
                header("Location: http://localhost/php/HITAK_CW4_PHP/HITAK_CW4_PHPjson.php");
                break;
            }
        }

    ?>
</body>
<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</html>