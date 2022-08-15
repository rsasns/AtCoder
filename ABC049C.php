<?php
$divide = ["eraser", "erase", "dreamer", "dream"];
$s = trim(fgets(STDIN));

$result = str_replace($divide, '', $s);

if ($result === '') {
  echo 'YES'.PHP_EOL;
} else {
  echo 'NO'.PHP_EOL;
}