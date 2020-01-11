<?php

$text = readline();

$text = substr($text, strrpos($text, "\\") + 1);
$fileName = substr($text,0, strrpos($text, ".") );
$ext = substr($text, strrpos($text, ".") + 1);

echo "File name: $fileName" . PHP_EOL;
echo "File extension: $ext";
