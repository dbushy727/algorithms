<?php

namespace Algorithm\Sort;

class QuickSort implements Sorter
{
    public function sort(array &$data)
    {
        if (count($data) <= 1) {
            return $data;
        }

        $left = [];
        $right = [];

        foreach (array_slice($data, 1) as $item) {
            if ($item <= $data[0]) {
                $left[] = $item;
            } else {
                $right[] = $item;
            }
        }

        return $data = array_merge($this->sort($left), [$data[0]], $this->sort($right));
    }
}
