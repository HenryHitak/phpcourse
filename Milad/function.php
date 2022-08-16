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
        function word_counter($inputString){
            $inputString = trim($inputString);//will remove the white spaces from the beginning and end of a string
            if(strlen($inputString)>0){
                $words = 1;
                for($idx=0;$idx<strlen($inputString);$idx++){
                    if($inputString[$idx]==" "){
                        $words++;
                    }
                }
                return $words;
            }
            return 0;
        }
        function string_revereser($inputString){
            $inputString = trim($inputString);
            if(strlen($inputString)>0){
                $revString = "";
                for($idx=strlen($inputString)-1;$idx>=0;$idx--){
                    $revString .= $inputString[$idx];
                }
                return $revString;
            }
            return "";

        }
        function character_finder($inputCharacter,$inputString,$caseSensi = true){
            $inputString = trim($inputString);//will remove the white spaces from the beginning and end of a string
            if(!$caseSensi){
                $inputCharacter = strtolower($inputCharacter);//convert to lowercase letters.
                $inputString = strtolower($inputString);
            }
            if(strlen($inputString)>0){
                $words = 0;
                for($idx=0;$idx<strlen($inputString);$idx++){
                    if($inputString[$idx]==$inputCharacter){
                        $words++;
                    }
                }
                return $words;
            }
            return 0;
        }
        $str = "   Write a function which count the words without using the str_word_count function";
        echo "Your string contains: ".word_counter($str)."Words</br>";
        //$str = "Marcelo";
        echo "Reverese: ".string_revereser($str)."</br>";
        echo "Your string contains: ".character_finder("w",$str,false)." Characters";
    ?>
</body>
</html>