<?php
$n = intval((trim(fgets(STDIN))));
$s = trim(fgets(STDIN));

echo substr_count($s, "ABC").PHP_EOL;