<?php

//__useing Array__//
$strings = ["Hello", "World", "PHP", "Programming"];

//__Create a countVowelsRegex Function__//
function countVowels($str) {
     preg_match_all('/[aeiouAEIOU]/', $str, $matches);
     return count($matches[0]);
}
//__foreach Loop__//
foreach($strings as $string){
    $orgStr=$string ;
    $vowels=countVowels($string);
    $rev= strrev($string);
    echo "Original String: " . $orgStr.",  Vowel Count: ".$vowels.",  Reversed String: ".$rev."<br>";
}
?>