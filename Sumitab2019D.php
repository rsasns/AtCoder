<?php
$n = array_map("intval", explode(" ", (trim(fgets(STDIN)))));
$s = strval(trim(fgets(STDIN)));

$cnt = 0;
for ($i=0; $i<10; ++$i) {
    $ipos = strpos($s, (string) $i, 0);
    if ($ipos === false) continue;
    for ($j=0; $j<10; ++$j) {
        $jpos = strpos($s, (string) $j, $ipos + 1);
        if ($jpos === false) continue;
        for ($k=0; $k<10; ++$k) {
            $kpos = strpos($s, (string) $k, $jpos + 1);
            if ($kpos !== false) ++$cnt;
        }
    }
}
echo $cnt.PHP_EOL;