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
        $hungry = true;
        if($hungry){
            echo "<h1> I am always hungry</h1>";
        }else {
            echo "<h1> I am going to be hungry in a min</h1>";
        };
        $num = 2;
        if($num % 2==0 ){
            echo "<h1> It is even num</h1>";
        }else{
            echo "<h1> It is odd num</h1>";
        }
        
        $result = 81;
        $math = 83;
        $history = 83;
        $english = 83;
        $spanish = 83;
        $sum = $result+$math+$history+$english+$spanish;
        $avg = $sum/5;
        $avg = number_format($avg,2);
        echo "Your Avg is: ". $avg;
        if($avg <= 100 && $avg> 85){
            echo "<h1> Your mark is: A</h1>";
        }else if($avg <= 85 && $avg > 75){
            echo "<h1> Your mark is: B</h1>";
        }else if($avg <= 75 && $avg > 65){
            echo "<h1> Your mark is: C </h1>";
        }else{
            echo "<h1>For Real!!!!!</h1>";
        }
        $sum1 = 0;
        $marks = array(20,33,33,55,44,44,80,50.8899);
        $marks[2];
        $marks1 = array(20,33,33,55,44);
        $index = 0;
        array_push($marks,100,30.999999999999);//add at the end
        array_unshift($marks,54); // add in the beginning
        array_unique($marks); // remove duplicate
        sort($marks);//smaller to bigger - ascending order
        rsort($marks);//reverse sort
        $search1 = array_search(40,$marks,false);
        while($index<count($marks)){
            echo "<h3>".$marks[$index]."</h3>";
            $sum1 += $marks[$index];
            $index++;
        };
        $total = array_sum($marks);

        $total = number_format($total,2);
        echo $total;
        echo "<h1>$search1</h1>";
        echo "<h2> Max : </h2>";
        echo "<h2> Max : </h2>";
    ?>
</body>
</html>