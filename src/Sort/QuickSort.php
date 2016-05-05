<?php

namespace Algorithm\Sort;

class QuickSort implements Sorter
{
    public function sort(array &$data)
    {
        if (count($data) <= 1) {
            return $data;
        }

        $left  = [];
        $pivot = $data[0];
        $right = [];

        $current_slice = array_slice($data, 1);

        foreach ($current_slice as $item) {
            if ($item <= $pivot) {
                $left[] = $item;
            } else {
                $right[] = $item;
            }
        }

        return $data = array_merge($this->sort($left), [$pivot], $this->sort($right));
    }
}
