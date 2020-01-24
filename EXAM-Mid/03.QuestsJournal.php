<?php

$quests = explode(", ", readline());

while (true) {
    $input = readline();
    if ($input === "Retire!") {
        break;
    }
    $args = explode(" - ", $input);
    $command = $args[0];
    $quest = $args[1];

    if ($command == "Start") {
        if (in_array($quest, $quests) == false) {
            $quests[] = $quest;
        }
    } else if ($command == "Complete") {
        if (in_array($quest, $quests)) {
            $index = array_search($quest, $quests);
            array_splice($quests, $index, 1);
        }
    } else if ($command == "Side Quest") {
        $sideQuest = explode(":", $quest);
        $quest1 = $sideQuest[0];
        $quest2 = $sideQuest[1];
        if (in_array($quest1, $quests)) {
            if (in_array($quest2, $quests) == false) {
                $index = array_search($quest1, $quests);
                array_splice($quests, $index + 1, 0, $quest2);
            }
        }
    } else if ($command == "Renew") {
        if (in_array($quest, $quests)) {
            $index = array_search($quest, $quests);
            array_splice($quests, $index, 1);
            $quests[] = $quest;
        }
    }
}

echo implode(", ", $quests);



/*Problem 3. Quests Journal
As a young adventurer, you start new quest every day, until you retire.
Input / Constraints
You start your adventurer path, receiving a journal with some beginner quests, separated with ', ' (comma and space). After that, until receiving "Retire!" you will be receiving different commands.
Commands:
•	"Start - {quest}" – Receiving this command, you should add the given quest in your journal. If the quest already exists, you should skip this line.
•	"Complete - {quest}" – You should remove the quest from your journal, if it exists.
•	"Side Quest - {quest}:{sideQuest}" – You should check if the quest exists, if so, add the side quest after the quest. Note that you shouldn`t add the sideQuest if it already exists.
•	"Renew – {quest}" – If the given quest exists, you should change its position and put it last in your journal.
Output
After receiving "Retire!" print the quests in the journal, separated by ", " (comma and space).
Examples
Input	                      Output
Hello World, For loop, If else
Start - While loop
Complete - For loop
Retire!	                 Hello World, If else, While loop
Input	Output
Hello World, If else
Complete - Homework
Side Quest - If else:Switch
Renew - Hello World
Retire!	                    If else, Switch, Hello World
...! a game where every hero wins the day with shiny armor and a smile...

 */
