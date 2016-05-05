<?php

namespace Algorithm\Sort;

class SelectionSort implements Sorter
{
    /**
     * Swap two items in an array
     *
     * @param  array  &$array
     * @param  int $first_index
     * @param  int $second_index
     * @return void
     */
    public function swap(array &$array, $first_index, $second_index)
    {
        $first_value            = $array[$first_index];
        $array[$first_index]    = $array[$second_index];
        $array[$second_index]   = $first_value;
    }

    /**
     * Find the index position with the smallest value in the array
     *
     * @param  array  $array
     * @param  int $start_index
     * @return int
     */
    public function minIndex(array $array, $start_index)
    {
        $min_index = $start_index;
        $min_value = $array[$min_index];

        $count = count($array);

        for ($index = $min_index + 1; $index < $count; $index++) {
            if ($array[$index] < $min_value) {
                $min_index = $index;
                $min_value = $array[$min_index];
            }
        }

        return $min_index;
    }

    /**
     * Sort the array using the Selection Sort algorithm
     *
     * @param  array  &$array
     * @return array
     */
    public function sort(array &$array)
    {
        foreach ($array as $index => $value) {
            $min_index = $this->minIndex($array, $index);
            $this->swap($array, $index, $min_index);
        }

        return $array;
    }
}
