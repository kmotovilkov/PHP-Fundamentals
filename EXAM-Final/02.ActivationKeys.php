<?php

$pattern = '/[A-Za-z0-9]{25}|[A-Za-z0-9]{16}/';
$keys = [];

$inputsArr = explode("&", readline());
foreach ($inputsArr as $input) {

    if (preg_match($pattern, $input)) {

        if (strlen($input) == 16) {
            for ($i = 0; $i < 16; $i++) {
                if (ctype_digit($input[$i])) {
                    $input[$i] = 9 - $input[$i];
                }
            }
            $newKey = "";
            for ($i = 0; $i < 16; $i++) {
                if ($i % 4 == 0 && $i != 0) {
                    $newKey .= "-";

                }
                $newKey .= $input[$i];
            }
        }
        if (strlen($input) == 25) {
            for ($i = 0; $i < 25; $i++) {
                if (ctype_digit($input[$i])) {
                    $input[$i] = 9 - $input[$i];
                }

            }
            $newKey = "";
            for ($i = 0; $i < 25; $i++) {
                if ($i % 5 == 0 && $i != 0) {
                    $newKey .= "-";

                }
                $newKey .= $input[$i];
            }

        }
        $input = $newKey;
        $keys[] = strtoupper($input);
    }

}

echo implode(", ", $keys);


/*
 Problem 02. Activation Keys

Stamat got his games from the winter sale, but the keys he got to activate them do 
not work. He needs to make them in the correct format in order to get his games.
You will receive one line with the keys of the games, divided by "&". You will have 
to see if the keys are valid. A valid key contains only numbers, letters and is 16 or
 25 symbols long. 
In order to fix the keys, you first have to put dashes ('-') in them. 
If the key is 16 symbols long, you should divide it into four groups of four symbols.
 If the key is 25 symbols long, you have to divide it in five groups of five symbols. Then you have to make all the letters in the key uppercase. The last thing you have to do is to take every digit from the key, subtract it from nine (9), and replace it with the new digit you have.
In the end you have to print all the keys, joined by ", ".
Input
One line with all the keys, divided by "&".
Output
One line with all the valid keys, joined by ", ".
Examples
Input	                                                                                                           Output	                                                                                    Comment
t1kjZU764zIME6Dl9ryD0g1U8&-P4*(`Q>:x8\yE1{({X/Hoq!gR.&rg93bXgkmILW188m&KroGf1prUdxdA4ln&U3WH9kXPY0SncCfs	T8KJZ-U235Z-IME3D-L0RYD-9G8U1, RG06-BXGK-MILW-811M, KROG-F8PR-UDXD-A5LN, U6WH-0KXP-Y9SN-CCFS	First you find the dividers '&' and then you take all the valid inputs (colored in yellow)
xPt8VYhUDalilWLvb6uMSGEEf&KWQ{R.@/HZCbbV++1o]V+oG@@fF^93&y6fT5EGFgZHqlFiS	XPT1V-YHUDA-LILWL-VB3UM-SGEEF, Y3FT-4EGF-GZHQ-LFIS	


 */
