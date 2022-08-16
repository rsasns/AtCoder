<?php
$n = intval((trim(fgets(STDIN))));

$ret=0;
for ($i=1; $i<=$n; $i++) {
    $cnt=0;
    if ($i % 2 == 0) continue;
    for ($j=1; $j<=$i; $j++) {
        if ($i % $j == 0) $cnt++;
    }
    if ($cnt == 8) $ret++;
}

echo $ret.PHP_EOL;