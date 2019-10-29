<?php

$country = readline();

if ($country === "USA" || $country === "England") {
    echo "English";
} else if ($country === "Spain" || $country === "Mexico"
    || $country === "Argentina") {
    echo "Spanish";
} else {
    echo "unknown";
}
