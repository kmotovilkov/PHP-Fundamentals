<?php

$wordDefinitions = explode(" | ", readline());
$wordCheck = explode(" | ", readline());
$command = readline();

$words = [];

foreach ($wordDefinitions as $wordDefinition) {

    $tokens = explode(": ", $wordDefinition);
    $word = $tokens[0];
    $definition = $tokens[1];
    if (!key_exists($word, $words)) {
        $words[$word][] = $definition;
    } else {
        $words[$word] [] = $definition;
    }
}

ksort($words);

foreach ($words as $word => $definitions) {
    if ($command == "List") {
        echo "$word ";

    } else if ($command == "End") {
        if (in_array($word, $wordCheck)) {
            echo $word . PHP_EOL;


            usort($definitions, function ($def1, $def2) use ($definitions) {
                $w1 = strlen($def1);
                $w2 = strlen($def2);
                return $w2 <=> $w1;
            });
            foreach ($definitions as $definition) {
                echo " -$definition" . PHP_EOL;
            }
        }
    }
}



/*
 Problem 1. Dictionary

Gencho is in the library, looking for words and their definitions to fill in his dictionary in order to be able to crack an encrypted code and find an ancient relic.
Your task is to take every word and insert it into the dictionary with its definition. A word may have one or more definitions. You will receive all the words and definitions, separated by " | ", and each word and its definition will be separated by ": ".
After this you will have to check the words you have in the dictionary. Now you will receive only words, again separated by " | ". For each word you get you will have to print it and all of its definitions, ordered by length of the definition in descending order (if it exists in the dictionary) in the following format:
"{word}:"
" –{definition1}"
" –{definition2}"
" –{definition3}"
. . .
In the end, you will receive one more command, which will be either "End" or "List". If the command is "End", you should break the program. If the command is "List", you should print all of the words, ordered alphabetically, separated by space (" ").
Input
Three strings. The first one will have pairs of words and descriptions, separated by " | " and each word separated from its description by ": ". The second string will have only words, separated by " | ". The third string will be a command – either "End" or "List".
Output
For each word that is called you have to print it with all of its definitions ordered by their length (descending). In the end you have to print all the words, ordered alphabetically, separated by a single space if you have the command "List".  For all of the words you have to print them in the format:
"{word}:"
" –{definition1}"
" –{definition2}"
" –{definition3}"
. . .
Examples
Input
programmer: an animal, which turns coffee into code | developer: a magician
Pesho | Gosho
List
Output
developer programmer

Input
tackle: the equipment required for a task or sport | code: write code for a computer program | bit: a small piece, part, or quantity of something | tackle: make determined efforts to deal with a problem | bit: a short time or distance
bit | code | tackle
End
Output
bit
 -a small piece, part, or quantity of something
 -a short time or distance
code
 -write code for a computer program
tackle
 -make determined efforts to deal with a problem
 -the equipment required for a task or sport


 */
