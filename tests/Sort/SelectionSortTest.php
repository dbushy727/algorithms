<?php

namespace Algorithm\Test\Sort;

use Algorithm\Sort\SelectionSort;

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_sort_an_array_in_ascending_order()
    {
        // Create the array and randomize it
        $array = range(1, 100);
        shuffle($array);

        // Sort the array
        (new SelectionSort)->sort($array);

        foreach ($array as $index => $num) {
            $this->assertEquals($index + 1, $num);
        }
    }
}
