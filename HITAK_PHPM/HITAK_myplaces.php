<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitak_myplaces</title>
</head>
<body>
    <?php
    echo "<table><thead><tr><th>City</th><th>Country</th></tr></thead>"; // Create table
    $countryCity = ["Japan" => "Osaka", "Argentina" => "Buenos Aires", "UK" => "London"];//need array
    foreach ($countryCity as $country => $city) { // loop to iterate thru array
      echo "<tr><td>".$country."</td><td>".$city."</td><tr>";
    }
    echo "</table>";//end table
    ?>
</body>
</html>