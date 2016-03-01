<?php

namespace Algorithm;

use Algorithm\Algorithm;

class LinearSearch extends Algorithm implements SearchAlgorithmInterface
{
    public function search(array $array, $target)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] === $target) {
                return $i;
            }
        }

        return -1;
    }
}
