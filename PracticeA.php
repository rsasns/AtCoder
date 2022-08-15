<?php
$a = intval(trim(fgets(STDIN)));
list($b, $c) = array_map("intval", explode(" ", trim(fgets(STDIN))));
$s = trim(fgets(STDIN));

echo $a+$b+$c ." ". $s . PHP_EOL;