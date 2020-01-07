<?php

$input = "";
$company = [];

while (true) {
    $input = readline();
    if ($input == "End") {
        break;
    }
    $tokens = explode(" -> ", $input);

    $companyName = $tokens[0];
    $employeeId = $tokens[1];

    if (!key_exists($companyName, $company)) {
        $company[$companyName] = $employeeId;
        $company[$companyName] = [];

    }
    if (!key_exists($employeeId, $company[$companyName])) {

        $company[$companyName][] = $employeeId;
    }
}
ksort($company);

foreach ($company as $key => $value) {
    echo $key . PHP_EOL;
    $value = array_unique($value);
    for ($i = 0; $i < count($value); $i++) {
        echo "-- $value[$i]" . PHP_EOL;
    }
}
