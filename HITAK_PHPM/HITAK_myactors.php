<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITAK_myactors</title>
</head>
<body>
    <?php
        $favActors = ["UK" => "Tom Hardy", "US" => "Sandra Bullock", "Canada" => "Ryan Reynolds", "Iran" => "Sarah Shahi", "India" => "Aamir Khan"];// Create array
        echo "<ol>";//create an ordered list
        foreach ($favActors as $country => $actor) {//foreach loop and go thru each key & value
        echo "<li>My favorourite star is: ".$actor." from ".$country.".</li>";//create list and display country & actor
        }
        echo "</ol>";//close ol
    ?>
</html>