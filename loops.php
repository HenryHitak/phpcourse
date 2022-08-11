<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php // run do after running while
    $counter = 6;
    do{
        echo "<h3>$counter</h3>";
        $counter++;
    }
    while($counter<5);
    for($counter = 0; $counter<5; $counter++){
        echo "<h1>$counter</h1>"; 
    }
    $friends = array("Alyce","Akane","Matheus","LinWen","Mamiko");
    $name = 0;
    echo "<ul>";
    while($name<count($friends)){
        echo "<li>$friends[$name]</li>"; // add name in index
        echo "<li>$name</li>";// show index
        $name++;
    };
    echo "<hr>";    
    for($name=0; $name<count($friends); $name++){
        echo "<li>$friends[$name]</li>";//add name in index ($name)
        echo "<li>$name</li>"; // show index
    }
    echo "</ul>";
// always tags inside of quotations
function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
 
// Returns maximum in array
function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}
 
// Driver code
$array = array(1, 2, 3, 4, 5);
echo "<h1> Max is : .(getMax($array)). </h1>";
echo("\n");
echo "<h1> Min is : .(getMin($array)). </h1>";
    ?>
</body>
</html>