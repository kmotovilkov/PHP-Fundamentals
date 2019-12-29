<?php


$plan = explode(", ", readline());

while (1) {
    $input = explode(":", readline());
    if ($input[0] == "course start") {
        break;
    }

    $command = $input[0];
    $lessonTitle = $input[1];

    if ($command == "Add") {
        if (in_array($lessonTitle, $plan) == false) {
            $plan[] = $lessonTitle;
        }
    } else if ($command == "Insert") {
        $index = $input[2];
        if (in_array($lessonTitle, $plan) == false) {
            array_splice($plan, $index, 0, $lessonTitle);
        }
    } else if ($command == "Remove") {
        if (in_array($lessonTitle, $plan)) {
            $index = array_search($lessonTitle, $plan);
            array_splice($plan, $index, 1);
            if (in_array($lessonTitle . "-Exercise", $plan)) {
                $index1 = array_search($lessonTitle . "Exercise", $plan);
                array_splice($plan, $index1, 1);
            }
        }
    } else
        if ($command == "Swap") {
            if (in_array($lessonTitle, $plan) && in_array($input[2], $plan)) {
                $index1 = array_search($lessonTitle, $plan);
                $index2 = array_search($input[2], $plan);

                array_splice($plan, $index2, 1, $input[1]);
                array_splice($plan, $index1, 1, $input[2]);

                if (in_array($lessonTitle . "-Exercise", $plan)) {
                    $indexEx1 = array_search($lessonTitle . "-Exercise", $plan);
                    array_splice($plan, $index2 + 1, 0, $input[1] . "-Exercise");
                    unset($plan[$indexEx1 + 1]);
                }
                if (in_array($input[2] . "-Exercise", $plan)) {
                    $indexEx2 = array_search($input[2] . "-Exercise", $plan);
                    array_splice($plan, $index1 + 1, 0, $input[2] . "-Exercise");
                    unset($plan[$indexEx2 + 1]);
                }
            }

        } else if ($command == "Exercise") {
            if (in_array($lessonTitle, $plan)) {
                if (in_array($lessonTitle . "-Exercise", $plan) == false) {
                    $index = array_search($lessonTitle, $plan);
                    array_splice($plan, $index + 1, 0, $lessonTitle . "-Exercise");
                }
            } else {
                $plan[] = $lessonTitle;
                $plan[] = $lessonTitle . "-Exercise";
            }
        }

    $plan = array_values($plan);
}


for ($i = 0; $i < count($plan); $i++) {
    echo $i + 1 . "." . $plan[$i] . PHP_EOL;
}
