<?php

require 'vendor/autoload.php';

$sort = new Algorithm\Sort\QuickSort;
$array = range(1, 1000);
shuffle($array);
var_dump($array);

$sort->sort($array);
var_dump($array);
