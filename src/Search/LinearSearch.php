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
        foreach ($array as $index => $value) {
            if ($value === $target) {
                return $index;
            }
        }

        return -1;
    }
}
