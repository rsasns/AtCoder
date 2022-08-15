<?php
list($a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));

if ($a*$b % 2 === 0) {
    echo "Even".PHP_EOL;
} else {
    echo "Odd".PHP_EOL;
}