<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h2{
        color: red;
    }
</style>
<body>
    <form>
        <input type="text" name="num1" placeholder="write your number">
        <input type="text" name="num2" placeholder="write your number">
        <select name="operator">
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <button type="submit" value="submit" name="submit">Check for the answer</button>
        <!-- <p>Your answer is : </p> -->
    </form>
    <!-- <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fname" placeholder="Write your first name">
        <input type="text" name="lname" placeholder="Write your last name">
        <input type="text" name="country" placeholder="Write your country">
        <button type="submit">Submit</button>
    </form> -->

            

    <?php
        
        // if($_SERVER['REQUEST_METHOD']=="POST"){
        //     $fname = $_POST["fname"];
        //     $lname = $_POST["lname"];
        //     $country = $_POST["country"];
        //     if($fname!=""&& $lname!="" &&$country !=""){
        //     echo "    <table>
        //     <thead>
        //     <tr>
        //     <th>
        //     First Name
        //     </th>
        //     <th>
        //     Last Name
        //     </th>
        //     <th>
        //     Country
        //     </th>
        //     </tr>
        //     </thead>
        //     <tbody>
        //     <tr><td>$fname </td>
        //     <td>$lname </td>
        //     <td>$country</td></tr>        </tbody>
        //     </table>";
        //     }else{
        //         echo "<h2>*All fields should be filled*</h2>";
        //     }
        // }elseif($_SERVER['REQUEST_METHOD']=='GET'){ //first default is GET so shows welcome when it's running
        //     echo "WELCOME TO MY PAGE";
        // }

if (isset($_GET['submit'])){
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator){
        case 'Add':
            $FResult =$result1 + $result2;
            echo "Result: ".$FResult;
            break;
        case 'Subtract':
            $FResult =$result1 - $result2;
            echo "Result:".$FResult ;
            break;
        case 'Multiply':
            $FResult =$result1 * $result2;
            echo "Result:".$FResult;
            break;
        case 'Divide':
            $FResult =$result1 / $result2;
            echo "Result:".$FResult;
            break;
        default : //default
             echo "wrong";
    }
}else{
echo "<h2>*All fields should be filled*</h2>";
}else if($_SERVER['REQUEST_METHOD']=='GET'){ //    first default is GET so shows welcome when it's running
            echo "WELCOME TO MY PAGE";}

    if($_SERVER['REQUEST_METHOD']=='POST'){
    $result1 = $_POST['num1'];
    $result2 = $_POST['num2'];
    $operator = $_POST['operator'];
    if ($result1 != "" &&  $result2 != ""){
        switch ($operator){
            case 'Add':
                $FResult =$result1 + $result2;
                echo "Result: ".$FResult;
                break;
            case 'Subtract':
                $FResult =$result1 - $result2;
                echo "Result:".$FResult ;
                break;
            case 'Multiply':
                $FResult =$result1 * $result2;
                echo "Result:".$FResult;
                break;
            case 'Divide':
                $FResult =$result1 / $result2;
                echo "Result:".$FResult;
                break;
        }
    }else{
        echo "<h2>All fields should be filled</h2>";
    }
    }
    elseif($_SERVER['REQUEST_METHOD']=='GET'){ //    first default is GET so shows welcome when it's running
            echo "WELCOME TO MY PAGE";}
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
