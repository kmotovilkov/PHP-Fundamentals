<?php
$gifts = explode(" ", readline());

$input = readline();

while (true) {
    if ($input == "No Money") {
        break;
    }

    $args = explode(" ", $input);
    $commands = $args[0];
    $gift = $args[1];


    if ($commands == "OutOfStock") {
        if (in_array($gift, $gifts)) {
            while (in_array($gift, $gifts) != false) {
                $index = array_search($gift, $gifts);
                array_splice($gifts, $index, 1, "None");
            }
        }
    } else if ($commands == "Required") {
        $index = $args[2];
        if (array_key_exists($index, $gifts)) {
            array_splice($gifts, $index, 1, $gift);
        }

    } else if ($commands == "JustInCase") {
        $lastIndex = count($gifts);
        array_splice($gifts, $lastIndex - 1, 1, $gift);
    }


    $input = readline();
}
$output = [];
foreach ($gifts as $gift) {
    if ($gift !== "None") {
        $output[] = $gift;
    }
}
echo implode(" ", $output);


/*Problem 2. Easter Gifts
As a good friend, you decide to buy presents for your friends.
Create a program that helps you plan the gifts for your friends and family. First, you are going to receive the gifts you plan on buying оn a single line, separated by space, in the following format:
"{gift1} {gift2} {gift3}… {giftn}"
Then you will start receiving commands until you read the "No Money" message. There are three possible commands:
•	"OutOfStock {gift}"
o	Find the gifts with this name in your collection, if there are any, and change their values to "None".
•	"Required {gift} {index}"
o	Replace the value of the current gift on the given index with this gift, if the index is valid.
•	"JustInCase {gift}"
o	Replace the value of your last gift with this one.
In the end, print the gifts on a single line, except the ones with value "None", separated by a single space in the following format:
"{gift1} {gift2} {gift3}… {giftn}"
Input / Constraints
•	On the 1st line you are going to receive the names of the gifts, separated by a single space.
•	On the next lines, until the "No Money" command is received, you will be receiving commands.
•	The input will always be valid.
Output
•	Print the gifts in the format described above.
Examples
Input	Output
Eggs StuffedAnimal Cozonac Sweets EasterBunny Eggs Clothes
OutOfStock Eggs
Required Spoon 2
JustInCase ChocolateEgg
No Money	   StuffedAnimal Spoon Sweets EasterBunny ChocolateEgg
Comments
First, we receive the command "OutOfStock" and we need to replace the values of "Eggs" with "None".  After this command the list should look like this:
None StuffedAnimal Cozonac Sweets EasterBunny None Clothes.
Afterwards, we receive the "Required" command and we need to replace the value on the 2nd index of our list with the value "Spoon". The list should look like this:
None StuffedAnimal Spoon Sweets EasterBunny None Clothes
After, we receive the "JustInCase" command, which means we need to replace the last value in our list with "ChocolateEggs". The list should look like this:
None StuffedAnimal Spoon Sweets EasterBunny None ChocolateEggs
In the end, we print all of the gifts, except the ones with values "None". This is the result list:
StuffedAnimal Spoon Sweets EasterBunny ChocolateEggs


Sweets Cozonac Clothes Flowers Wine Clothes Eggs Clothes
Required Paper 8
OutOfStock Clothes
Required Chocolate 2
JustInCase Hat
OutOfStock Cable
No Money	   Sweets Cozonac Chocolate Flowers Wine Eggs Hat


 */
