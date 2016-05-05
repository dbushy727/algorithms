<?php

namespace Algorithm\Sort;

interface Sorter
{
    /**
     * Define a sort function with an input array
     *
     * @param  array  &$array
     * @return void
     */
    public function sort(array &$array);
}
