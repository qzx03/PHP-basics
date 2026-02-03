<?php
function greeting() {
    echo "greetings everyone !";
}
greeting();

function addition($a, $b) {
    return $a + $b;
}
echo "sum : " . addition(5, 10);

function welcome($name = "visitor") {
    echo "welcome " . $name;
}
welcome(); // shows "welcome visitor"

$counter = 0;

function increment() {
    static $counter = 0;
    $counter++;
    echo $counter;
}
increment(); // shows 1
increment(); // shows 2

?>