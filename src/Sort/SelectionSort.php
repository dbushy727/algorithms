<?php

namespace Algorithm\Sort;

class SelectionSort implements Sorter
{
    public function swap(array &$array, $first_index, $second_index)
    {
        $first_value            = $array[$first_index];
        $array[$first_index]    = $array[$second_index];
        $array[$second_index]   = $first_value;
    }

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

    public function sort(array &$array)
    {
        foreach ($array as $index => $value) {
            $min_index = $this->minIndex($array, $index);
            $this->swap($array, $index, $min_index);
        }
    }
}
