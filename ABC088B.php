<?php
$n = intval((trim(fgets(STDIN))));
$a_values = array_map("intval", explode(" ", trim(fgets(STDIN))));

$alice = true;
$a_cards = [];
$b_cards = [];
rsort($a_values);
for ($i=0; $i<$n; $i++) {
    if ($alice) {
        array_push($a_cards, $a_values[$i]);
        $alice = false;
    } else {
        array_push($b_cards, $a_values[$i]);
        $alice = true;
    }
    unset($a_values[$i]);
}

echo array_sum($a_cards) - array_sum($b_cards) . PHP_EOL;