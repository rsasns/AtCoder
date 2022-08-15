<?php
$cnt = 0;
$values = trim(fgets(STDIN));

for ($i=0; $i<3; $i++) {
    $s = substr($values, $i, 1);
    if ($s == 1) $cnt++;
}

echo $cnt.PHP_EOL;