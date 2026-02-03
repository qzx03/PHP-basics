<?php
for ($i = 1; $i <= 10; $i++) {
    echo "number : $i <br>";
}

$j = 1;
while ($j <= 5) {
    echo "iteration : $j <br>";
    $j++;
}

$animals = ["cat", "dog", "rabbit"];
foreach ($animals as $animal) {
    echo "Animal : $animal <br>";
}

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue; // skips 5
    if ($i == 8) break;    // stops at 8
    echo "value : $i <br>";
}

?>