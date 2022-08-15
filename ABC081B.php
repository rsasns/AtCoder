<?php
$n = intval(trim(fgets(STDIN)));
$a_values = array_map("intval", explode(" ", (trim(fgets(STDIN)))));

$cnt = 0;
for ($j=0; $j<200; $j++) {
    $odd = false;
    for ($i=0; $i<$n; $i++) {
        if ($a_values[$i] % 2 > 0) $odd = true;
    }
    if ($odd) break;
    for ($i=0; $i<$n; $i++) {
        $a_values[$i] = $a_values[$i] / 2;
    }
    $cnt++;
}

echo $cnt.PHP_EOL;