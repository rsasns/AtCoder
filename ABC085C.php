<?php
list($n, $total) = array_map("intval", explode(" ", (trim(fgets(STDIN)))));

$res10000 = -1;
$res5000 = -1;
$res1000 = -1;
for ($x=0; $x<=$n; $x++) {
    for ($y=0; $y+$x<=$n; $y++) {
        $z = $n - $x - $y;
        if ($x*10000 + $y*5000 + $z*1000 == $total) {
            $res10000 = $x;
            $res5000 = $y;
            $res1000 = $z;
        }
    }
}

echo $res10000." ".$res5000." ".$res1000.PHP_EOL;