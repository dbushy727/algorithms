<?php

namespace Algorithm\Search;

class LinearSearch implements Searcher
{
    /**
     * Search for target within input utilizing linear search algorithm
     *
     * @param  array  $array    Array of inputs
     * @param  mixed  $target   Value to search for
     * @return int              Position of the target within the input array
     */
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
