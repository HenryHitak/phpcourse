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
        $name = "Jiwon Lee Lee";
        echo "Length: ".strlen($name)."<br>";
        echo "Word Count: " .str_word_count($name)."<br>";
        echo "String Reverse: " .strrev($name)."<br>";
        echo "Find a position: " .strpos($name,"Lee")."<br>";
        echo "Replacing a string: " .str_replace("Lee","Ken",$name)."<br>";
        echo "Return a substring: " .substr($name,strpos($name,"Lee"),strlen("Lee"))."<br>";
        echo $name."<br>";
        for($idx=0;$idx<strlen($name);$idx++){
            echo $name[$idx]."<br>";
        };
//단어 수 세기 --------------Q1-------------------------
        function words ($word){
            $word = trim($word);
            if(strlen($word)>0){
                $wrd=1;
                for($idx=0;$idx<strlen($word);$idx++){
                    if($word[$idx]==" "){
                        $wrd++;
                    }
                }
                return $wrd;
            }
            return 0;
        }
        $str = "he l l l   l   l  o w w w   w";
        echo "Words : " .words($str);
// <-------------------Q2---------------------->
        function reverse($input){ //
            $input = trim($input);//스페이스가 많을 경우 정리
            if(strlen($input)>0){ //만약 array가 0보다 크다면
                $revString=""; //내용을 담는 array 형식, revString은 0
                for($idx=strlen($input)-1;$idx>=0;$idx--){ //idx의 시작은 0부터니까 뒤에서 시작하려면 -1, 마지막 도착지점 0, idx는 최고점에서 시작했으니까 저점까지 가기위해 --
                    $revString .= $input[$idx]; // concat
                }
                return $revString;//revString에 내용이 없었으나, for loop을 지나고 나서 정보를 concat했고 return하는것
            }
            return "";
        }
        $str = "he l l l   l   l  o w w w   w ";
        echo "</br>Words : " .reverse($str);
// <-------------------Q3---------------------->   중복 단어 찾기
        function words1 ($inputcharacter,$inputString,$caseSensi = true){ //caseSensi is true
            $inputString = trim($inputString);
            if(!$caseSensi){ //if caseSensi is false
                $inputString = strtolower($inputString);
                $inputcharacter = strtolower($inputcharacter);
            }
            if(strlen($inputString)>0){
                $words= 0;
                for($idx=0;$idx<strlen($inputString);$idx++){
                    if($inputString[$idx]==$inputcharacter){
                        $words++;
                    }
                }
                return $words;
            }
            return 0;
        }
        $str = "he l l l   l   l  o w W w   w";
        echo "</br>Words : " .words1('w',$str);
        echo "</br>Words : " .words1('w',$str,false); // give caseSensi false
    ?>
</body>
</html>