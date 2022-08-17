<?php
list($a, $b, $c, $x, $y) = array_map("intval", explode(" ", (trim(fgets(STDIN)))));

$ans = 2*(5000*10**5);
$ans2 = $a*$x + $b*$y;
for ($i=1; $i<=10**5; $i++) {
    $total = $a*max($x-$i, 0) + $b*max($y-$i, 0) + 2*$c*$i;
    $ans = min($ans, $total);
}

echo min($ans, $ans2).PHP_EOL;