<?php

namespace Algorithm\Test\Search;

use Algorithm\Search\BinarySearch;

class BinarySearchTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_find_target_index_value_from_array()
    {
        $cases = [
            [
                'input' => range(0, 100),
                'target' => 30,
                'expected' => 30,
            ],
            [
                'input' => range(10, 30),
                'target' => 22,
                'expected' => 12,
            ],
        ];

        foreach ($cases as $case) {
            $binary_search = (new BinarySearch)->search($case['input'], $case['target']);
            $this->assertEquals($binary_search, $case['expected']);
        }
    }

    /** @test */
    public function it_will_return_a_negative_if_target_is_not_in_array()
    {
        $input = range(0, 20);
        $target = 30;
        $expected = -1;

        $binary_search = (new BinarySearch)->search($input, $target);
        $this->assertEquals($binary_search, $expected);
    }
}
