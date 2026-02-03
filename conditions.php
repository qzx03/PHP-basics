<?php
$age = 17;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

$note = 14;
if ($note >= 16) {
    echo "very good";
} elseif ($note >= 10) {
    echo "okay";
} else {
    echo "failed";
}

$jour = "friday";
switch ($jour) {
    case "monday":
        echo "start of the week";
        break;
    case "friday":
        echo "last day of the week";
        break;
    default:
        echo "normal day of the week";
}

?>