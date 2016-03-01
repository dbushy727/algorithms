<?php

require 'vendor/autoload.php';

use Algorithm\BinarySearch;
use Algorithm\LinearSearch;

$linear_search = new LinearSearch;
$binary_search = new BinarySearch;
$input         = range(0, 500);
$target        = 30;

$l_start = microtime(true);
$linear_search->search($input, $target);
$l_end = microtime(true);
$linear_time = $l_end - $l_start;


$b_start = microtime(true);
$binary_search->search($input, $target);
$b_end = microtime(true);
$binary_time = $b_end - $b_start;
echo $binary_time <= $linear_time ? 'binary' : 'linear';
