<?php
$n = intval((trim(fgets(STDIN))));

$cnt=0;
for ($i=1; $i<=$n; $i++) {
    if (strlen($i) % 2 != 0) {
        $cnt++;
    }
}

echo $cnt.PHP_EOL;