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
    $test= array(
        [10,9,1],
        [8,4,5],
        [1,3,4],
        [2,7,6]
    );
    // $max = 0; //getting the max of every array
    for($col = 0;$col<count($test);$col++){
        echo "<h2> Max Row $col:";
        // for($row = 0; $row<count($test[$col]);$col++){
        $max = 0; // getting the max of each array
        for($row=0;$row<count($test[$col]);$row++){
            if($max<=$test[$col][$row]){
                $max = $test[$col][$row];
            };
        }
        echo "$max</h2>";
    };
    for($col = 0;$col<count($test);$col++){
        echo "<h2> Min Row $col:";
        // for($row = 0; $row<count($test[$col]);$col++){
        $min = 10; // getting the max of each array
        for($row=0;$row<count($test[$col]);$row++){
            if($min>=$test[$col][$row]){
                $min = $test[$col][$row];
            };
        }
        echo "$min</h2>";
    };
    $test = array(
            [10,8,0],
            [10,9,4],
            [6,9,2],
            [7,8,10]
        );
    for($col=0;$col<count($test);$col++){
        echo "<h2>Max Row $col: ";
        $max = 0;
        for($row=0;$row<3;$row++){
            if($max<=$test[$col][$row]){
                $max = $test[$col][$row];
            }
        }
        echo "$max</h2>";
    };
    foreach($test as $key=>$value){
        echo "<h2>Max Row $key: ";
        $max = 0;
        foreach($value as $number){
            if($max<=$number){
                $max = $number;
            }
        }
        echo "$max</h2>";
    }
    ?>
</body>
</html>