<?php
$name = "Alice";
$age = 25;
$price = 19.99;
$isconnected = true;

echo "name : " . $name . "<br>";
echo "age : " . $age . "<br>";
echo "price : " . $price . " €<br>";
echo "connected : " . ($isconnected ? "Oui" : "Non") . "<br>";

var_dump($name);

$number = "10";
$numINT = (int)$number;
echo "Conversion : " . $numINT;
?>