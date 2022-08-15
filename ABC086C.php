<?php
$n = intval(trim(fgets(STDIN)));

$ret = "Yes";
$pt=0; $px=0; $py=0;
for ($i=0; $i<$n; $i++) {
  list($t, $x, $y) = array_map("intval", explode(" ", trim(fgets(STDIN))));
  $d = abs($px-$x) + abs($py-$y);
  $dt = $t-$pt;
  if ($dt < $d) {
    $ret = "No";
    break;
  }
  if (($dt - $d) % 2 != 0) {
    $ret = "No";
    break;
  }
  $pt = $t;
  $px = $x;
  $py = $y;
}

echo $ret . PHP_EOL;