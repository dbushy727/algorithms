<?php

namespace Algorithm\Search;

class BinarySearch implements SearchAlgorithmInterface
{
    /**
     * Search for target within input utilizing binary search algorithm
     *
     * @param  array  $array    Array of inputs
     * @param  mixed  $target   Value to search for
     * @return int              Position of the target within the input array
     */
    public function search(array $array, $target)
    {
        $min = 0;
        $max = count($array) - 1;

        while ($max >= $min) {
            $midpoint = $this->getMidpoint($min, $max);

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

    /**
     * Get the midpoint between two points
     *
     * @param  int  $min    Lower bound
     * @param  int  $max    Upper bound
     * @return int          Midpoint between upper and lower
     */
    public function getMidpoint($min, $max)
    {
        return (int) floor(($min + $max) / 2);
    }
}
