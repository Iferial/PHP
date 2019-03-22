<?php
$mas = [1, 2, 3, 4, 5];
$result = 0;
foreach ($mas as &$value) {
    $value = pow($value,2);
    $result += $value;
}
echo $result . "\n";