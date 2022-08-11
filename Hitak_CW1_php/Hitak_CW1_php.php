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
        // Considering this associate array:
        // $students = array("Henry"=>[56,80,70],"Kathleen"=>[70,80,67],"Lin-Wen"=>[90,55,76],"Akane"=>[78,80,90]);
        // write a php program which is able to show the maximum, minimum and average for each student. Display the output in the following format:
            // Student Name : Max: 90 , Min: 76 , Average: 87.6
            // Take a screen shot from your code and upload it using this naming convention: Fname_CW1_PHP.jpg. (Fname is your first name)
            
            $students = array("Henry"=>[56,80,70],
            "Kathleen"=>[70,80,67],
            "Lin-Wen"=>[90,55,76],
            "Akane"=>[78,80,90]);
            foreach($students as $key=>$value){
        $max = 0;
        foreach($value as $number){
            if($max<=$number){
                $max = $number;
            }
        };
        $min = 100;
        foreach($value as $number){
            if($min>=$number){
                $min = $number;
            }
        };
        $sum=0;
        foreach($value as $number){
            $div = count($value);
            $sum+=$number;
            $total = $sum/$div;
            $total = number_format($total,2);
        }
        echo "<h2>Student Name : $key
            Max: $max 
            Min: $min
            Average: $total</h2>";
        
        };
echo "    
            <table>
            <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Max
                </th>
                <th>
                    Min
                </th>
                <th>
                    Average
                </th>
            </tr>
            </thead>
                <tbody>
                       ";
 $students = array("Henry"=>[56,80,70],
            "Kathleen"=>[70,80,67],
            "Lin-Wen"=>[90,55,76],
            "Akane"=>[78,80,90]);
            foreach($students as $key=>$value){
        $max = 0;
        foreach($value as $number){
            if($max<=$number){
                $max = $number;
            }
        };
        $min = 100;
        foreach($value as $number){
            if($min>=$number){
                $min = $number;
            }
        };
        $sum=0;
        foreach($value as $number){
            $div = count($value);
            $sum+=$number;
            $total = $sum/$div;
            $total = number_format($total,2);
        };
        echo "<tr> <td>
            $key
        </td>
        <td>
            $max
        </td>
        <td>
            $min
        </td>
        <td>
            $total
        </td> 
        </tr>";
    }
    echo "
    </tbody>
</table>";
    ?>
</body>
</html>