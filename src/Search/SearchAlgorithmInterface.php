<?php

namespace Algorithm\Search;

interface SearchAlgorithmInterface
{
    /**
     * Define a search function with an input array and a target value
     *
     * @param  array  $array    Array of inputs
     * @param  mixed  $target   Value to search for
     * @return int              Position of the target within the input array
     */
    public function search(array $array, $target);
}
