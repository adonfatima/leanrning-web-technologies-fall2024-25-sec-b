<?php

$array = [
    ['1', '2', '3', 'A'],
    ['B', 'C'],
    ['1', 'D', 'E', 'F']
];


for ($row = 0; $row < count($array); $row++) {
    for ($col = 0; $col < count($array[$row]); $col++) {
        echo $array[$row][$col];
    }
    echo "\n";
}

?>
