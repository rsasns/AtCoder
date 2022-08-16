<?php
list($a, $b, $k) = array_map("intval", explode(" ", ((trim(fgets(STDIN))))));

$cnt=0;
for ($i=100; $i>=1; $i--) {
    if ($a % $i == 0 && $b % $i == 0) {
        $cnt++;
        if ($cnt == $k) {
            echo $i.PHP_EOL;
            break;
        }
    }
}