<?php

$str = readline();
$countVowel = countVowels($str);
echo $countVowel;

function countVowels($string)
{
    $count = 0;
    $length = strlen($string);
    for ($i = 0; $i < $length; $i++) {
        $vowel = strtolower($string[$i]);
        if ($vowel == "a" || $vowel == "o"
            || $vowel == "e" || $vowel == "u" || $vowel
            == "i") {
            $count++;
        }
    }
    return $count;
}
