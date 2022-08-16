<?php
$n = intval((trim(fgets(STDIN))));

$ret = "No";
for ($i=1; $i<=9; $i++) {
    for ($j=1; $j<=9; $j++) {
        if ($i*$j == $n) {
            $ret = "Yes";
        }
    }
}

echo $ret.PHP_EOL;