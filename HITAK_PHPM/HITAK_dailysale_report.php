<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dailysale_report</title>
</head>
<body>
  <?php
  //Create another PHP file with this name: Fname_dailysale_report.php. This file should use the attached JSON file which contains a summery of daily sale of different grocery products. Your file should be able to display a table with row number start from 1, name of product and the total sale price with "$". After the table display the average, maximum and minimum sale with the name of the product. Note: you can use methods or just write the code.
    $filePath = "./myfiles/sell_report.json"; //store the path
    $fileHandler = fopen($filePath, "r"); //open the file with handler in read mode
    $jsonFile = fread($fileHandler, filesize($filePath));
    fclose($fileHandler);
    $data = json_decode($jsonFile, true);
    $total = 0;//total variable
    $min = 100000000;//minimum variable
    $max = 0;//maximum variable
    echo "<table><thead><tr><th>#</th><th>Item</th><th>Total</th></tr></thead>";  // Create the table and iterate each value
     if(file_exists('./myfiles/sell_report.json')){
        // print_r($data);
        foreach ($data as $value => $index) {
            $total += $index["price"];
            $multi= $total*$index["amount"];
            echo "<tr><td>" . $value+1 . "</td><td>" . $index["item_name"] . "</td><td>$" . $multi . "</td></tr>";//start index number with 1 and add $ for the price, item name and total price of the product.
        if ($multi > $max) {
            $max = $multi;
            $maxProduct = $index["item_name"];
        }
        if ($multi < $min) {
            $min = $multi;
            $minProduct = $index["item_name"];
        }
        }
        }else{
        $message = "<h3 class='text-danger'>JSON file Not found</h3>";
      }
      echo "</table>";
      echo "<h3>Total: $" . $total . "</h3></br>";
      echo "<h3>Average is: $" . $multi/count($data) . "</h3></br>";
      echo "<h3>Minimum Price is: $" . $min . " || Item Name is: " . $minProduct . "</h3></br>";
      echo "<h3>Maximum Price is: $" . $max . " || Item Name is: " . $maxProduct . "</h3></br>";
    ?>
</body>
</html>