<?php

require 'vendor/autoload.php';

use Algorithm\Search\BinarySearch;
use Algorithm\Search\LinearSearch;

$linear_search = new LinearSearch;
$binary_search = new BinarySearch;
$input         = range(0, 500);
$target        = 30;


$linear_output = $linear_search->search($input, $target);
$binary_output = $binary_search->search($input, $target);

var_dump(compact('linear_output', 'binary_output'));
