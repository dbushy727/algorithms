<?php

require 'vendor/autoload.php';

use Algorithm\Search\BinarySearch;
use Algorithm\Search\LinearSearch;

$input         = range(0, 500);
$target        = 30;

$linear_search = (new LinearSearch)->search($input, $target);
$binary_search = (new BinarySearch)->search($input, $target);

var_dump(compact('linear_search', 'binary_search'));
