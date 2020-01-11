<?php

$text = preg_split("/[ ,.?!]/", readline(), null, PREG_SPLIT_NO_EMPTY);
$palindromes = [];
foreach ($text as $word) {
    $revWord = strrev($word);
    if ($word === $revWord) {
        $palindromes[] = $word;
    }
}

natcasesort($palindromes);
echo implode(", ", array_unique($palindromes));
