<?php
$animals = ["cat", "dog", "rabbit"];
echo "first animal : " . $animals[0] . "<br>";

foreach ($animals as $animal) {
    echo "Animal : $animal <br>";
}

$car = [
    "brand" => "Toyota",
    "model" => "Corolla",
    "year" => 2020
];
echo "model : " . $car["model"] . "<br>";

$fruits = ["apple", "banana"];
array_push($fruits, "mango"); // adds "mango"
unset($fruits[1]); // removes "banana"
echo "fruit count : " . count($fruits);

?>