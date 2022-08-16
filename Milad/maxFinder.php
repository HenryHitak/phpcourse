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