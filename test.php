<?php

echo "Hello, world!\n";

$a =[10, 20, 15, 17, 24, 35];
$result = 0;

foreach ($a as $item) {
    $result += $item;
}
echo $result . "\n";