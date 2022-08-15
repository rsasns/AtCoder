<?php
$n = intval(trim(fgets(STDIN)));

$d_values = [];
for ($i=0; $i<$n; $i++) {
    $d = intval(trim(fgets(STDIN)));
    array_push($d_values, $d);
}
$uniqued = array_unique($d_values);

echo count($uniqued).PHP_EOL;