<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    th,td{
        border: 1px solid black;
        text-align: center;
        width: 15vh;
    }
</style>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="firstN" placeholder="Write your first name" />
        <input type="text" name="lastN" placeholder="Write your last name" />
        <input type="text" name="firstMark" placeholder="Write your first Mark" />
        <input type="text" name="secondMark" placeholder="Write your second Mark" />
        <input type="text" name="thirdMark" placeholder="Write your third Mark" />
        <input type="text" name="fourthMark" placeholder="Write your fourth Mark" />
        <!-- <input type="text" name="marks" placeholder="Mark1;Mark2;Mark3;Mark4"> -->
        <input type="text" name="program" placeholder="Write your program" />
        <button type="submit">Add</button>
    </form>
    <?php
        // Create an html form and get student's information inculding: firstname, lastname, 4 marks and the enrolled program.
        // Create a class to store these info for a student and add 3 methods:
        // 1.calculate the avg of a student's marks.
        // 2.find the maximum and minimum.
        // 3.display all details of a student using the other two methods and students properties.
        // Note:your class should have a constructor and you are only allowed to call the 3rd method in the main program.
        class score{
            public $firstN;
            public $lastN;
            public $marks;
            public $program;
            function __construct($firstN,$lastN,$marks,$program)
            {
                $this->firstN = $firstN;
                $this->lastN = $lastN;
                $this->marks = $marks;
                $this->program = $program;
            }
            function avg(){
                $sum = 0;
                foreach($this->marks as $mark){
                    $sum += $mark;
                }
                $avg = $sum / count($this->marks);
                return $avg;
            }
            function maxmin(){
                $max = 0;
                $min = 100;
                foreach($this->marks as $mark){
                    if($max < $mark){
                        $max = $mark;
                    }
                    if($min > $mark){
                        $min = $mark;
                    }
                }
                return "max of marks: $max, min of marks: $min";
            }
            function displayInfo(){
                echo "<h1>Student Name: $this->firstN $this->lastN, program is: $this->program, average of marks: ".$this->avg().", ".$this->maxmin()."</h1>";
            }
        }

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $info = new score($_POST["firstN"],$_POST["lastN"],[$_POST['firstMark'],$_POST['secondMark'],$_POST['thirdMark'],$_POST['fourthMark']],$_POST['program']);
            // $marks = explode(";", $_POST['marks']); // use one input
            // $info = new score($_POST['firstN'],$_POST['lastN'],$marks,$_POST['program']);
            echo "<h1>".$info->displayInfo()."</h1>";
            echo "<table>
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Program</th>
                            <th>Mark 1</th>
                            <th>Mark 2</th>
                            <th>Mark 3</th>
                            <th>Mark 4</th>
                            <th>Average</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>";
            populate();
            echo   "</tr>
                    </tbody>
                </table>";
        }
        elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
                echo "<h1>Welcome to My Page</h1>";
        }

        // print_r($info);
        function populate(){
            $info = new score($_POST["firstN"],$_POST["lastN"],[$_POST['firstMark'],$_POST['secondMark'],$_POST['thirdMark'],$_POST['fourthMark']],$_POST['program']);
            echo "<td>".$info->firstN."</td>";
            echo "<td>".$info->lastN."</td>";
            echo "<td>".$info->program."</td>";
            foreach($info->marks as $data){
                echo "<td>".$data."</td>";
            }
            echo "<td>".$info->avg()."</td>";
            
        };
    ?>
</body>
</html>