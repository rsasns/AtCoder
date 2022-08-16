<?php
$n = intval(trim(fgets(STDIN)));

$fmin = floor(log10($n))+1;
for ($a=2; $a<=floor(sqrt($n)); $a++) {
    if ($n % $a == 0) {
        $fmin = min($fmin, floor(log10($n/$a))+1);
    }
}

echo $fmin.PHP_EOL;