<?php
$a = intval(trim(fgets(STDIN)));
$b = intval(trim(fgets(STDIN)));
$c = intval(trim(fgets(STDIN)));
$x = intval(trim(fgets(STDIN)));

$cnt = 0;
for ($i=0; $i<=$a; $i++) {
    for ($j=0; $j<=$b; $j++) {
        for ($k=0; $k<=$c; $k++) {
            if ($x == 500*$i + 100*$j + 50*$k) {
                $cnt++;
            }
        }
    }
}

echo $cnt . PHP_EOL;