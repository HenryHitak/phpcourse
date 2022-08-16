<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Course 1</th>
                <th>Course 2</th>
                <th>Course 3</th>
                <th>Maximum</th>
                <th>Minimum</th>
                <th>Average</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $students = array("Henry"=>[56,80,70],"Kathleen"=>[70,80,67],"Lin-Wen"=>[90,55,76],"Akane"=>[78,80,90]);
        $maxStudent = "";
        $minStudent = "";
        $maxAvg = 0;
        $minAvg = 100;
        foreach($students as $studentName=>$scores){
            $max = 0;
            $min = $scores[0];
            $sum = 0;
            echo "<tr><td>$studentName</td>";
            foreach($scores as $score){
                echo "<td>$score</td>";
                if($max <= $score){
                    $max = $score;
                }
                if($min > $score){
                    $min = $score;
                }
                $sum += $score;
            }
            $avg = round($sum / count($scores),2);
            if($maxAvg<=$avg){
                $maxStudent = $studentName;
                $maxAvg = $avg;
            }
            if($minAvg>$avg){
                $minStudent = $studentName;
                $minAvg = $avg;
            }
            echo "<td>$max</td><td>$min</td><td>$avg</td></tr>";
        }
    ?>
        </tbody>
    </table>
    <?php
        echo "<h2>Best Student: $maxStudent, Student who needs to work more: $minStudent</h2>";
    ?>
</body>
</html>