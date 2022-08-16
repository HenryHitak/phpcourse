<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php

use student as GlobalStudent;

 echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fname"placeholder="Write student's first name">
        <input type="text" name="lname"placeholder="Write student's last name">
        <input type="text" name="firstMarks"placeholder="Write student's 1st mark">
        <input type="text" name="secondMarks" placeholder="Write student's 2nd mark">
        <input type="text" name="thirdMarks" placeholder="Write student's 3rd mark">
        <input type="text" name="fourthMarks" placeholder="Write student's 4th mark">
        <input type="text" name="program" placeholder="Enrolled program">
        <button type="submit">Submit</button>
    </form>
    <?php
        // create an html form and get student's info including: fname,lname,4 marks and the enrolled prog.
        // create a class to store these info for a student and add 3 methods:
        //     1.calculate the avg of a student's marks.
        //     2.find the maximum and minimum.
        //     3.display all details of a student using the other two methods and students properties.
        //     Note:your class should have a constructor and you are only allowed to call the 3rd method in the main program.
        class student{
            public $fname;
            public $lname;
            public $firstMarks;
            public $secondMarks;
            public $thirdMarks;
            public $fourthMarks;
            public $program;
        function __construct($fname,$lname,$firstMarks,$secondMarks,$thirdMarks,$fourthMarks,$program){
            $this->fname = $fname;
            $this->lname = $lname;
            // $this->firstMarks= $firstMarks;
            // $this->secondMarks= $secondMarks;
            // $this->thirdMarks= $thirdMarks;
            // $this->fourthMarks= $fourthMarks;
            $this->program = $program;
            $this->marks = array($firstMarks,$secondMarks,$thirdMarks,$fourthMarks);
        }
        function avg(){
            $sum=0;
            foreach($this->marks as $mark){
                $sum = 0;
                foreach($this->marks as $mark){
                    $sum += $mark;
                }
                $avg = $sum / count($this->marks);
                return $avg;
            }
        }            
        function maxMin(){
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
            
            function displayDetails(){
                return "Student Name: $this->fname $this->lname,  Marks:$this->marks,  Program:$this->program";
            }
            function displayInfo(){
                echo "<h1>Student Name: $this->fname $this->lname, Program is: $this->program, Average of marks: ".$this->avg().", ".$this->maxmin()."</h1>";
            }
        };
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        $info = new student($_POST["fname"],$_POST["lname"],$_POST["firstMarks"],$_POST["secondMarks"],$_POST["thirdMarks"],$_POST["fourthMarks"],$_POST["program"]);
        echo "<h1>".$info->displayInfo()."</h1>";
        }elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
            echo "<h1>Welcome to My Page</h1>";
        }
    ?>
</body>
</html>