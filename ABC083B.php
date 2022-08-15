<?php
list($n, $a, $b) = array_map("intval", explode(" ", (trim(fgets(STDIN)))));

// 各桁の和を計算する関数
function findSumOfDigits(int $n): int
{
    $sum = 0;
    while ($n > 0) {
        $sum += $n % 10;
        $n /= 10;
    }
    return $sum;
}

$total = 0;
for ($i=1; $i<=$n; $i++) {
    $sum = findSumOfDigits($i);
    if ($sum >= $a && $sum <= $b) $total += $i;
}

echo $total . PHP_EOL;