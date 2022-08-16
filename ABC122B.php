<?php
$acgt = ["A", "C", "G", "T"];
$s = trim(fgets(STDIN));

$cnt = 0;
$ans = 0;
for ($i=0; $i<strlen($s); $i++) {
    if (in_array($s[$i], $acgt)) {
        $cnt++;
    } else {
        if ($ans <= $cnt) $ans = $cnt;
        $cnt = 0;
    }
}
if ($ans <= $cnt) $ans = $cnt;

echo $ans.PHP_EOL;