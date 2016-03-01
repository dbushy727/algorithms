<?php

namespace Algorithm;

use Algorithm\Algorithm;

class BinarySearch extends Algorithm implements SearchAlgorithmInterface
{
    public function search(array $array, $target)
    {
        $min = 0;
        $max = count($array) - 1;

        while ($max >= $min) {
            $midpoint = (int) floor(($max + $min) / 2);

            if ($array[$midpoint] === $target) {
                return $midpoint;
            }

            if ($array[$midpoint] < $target) {
                $min = $midpoint + 1;
            }

            if ($array[$midpoint] > $target) {
                $max = $midpoint - 1;
            }
        }

        return -1;
    }
}
