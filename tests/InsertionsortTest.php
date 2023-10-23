<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\InsertionSort;

final class InsertionsortTest extends TestCase
{
    #[Test]
    #[DataProvider('arrayProvider')]
    public function it_should_return_the_sorted_array($arr)
    {
        $this->assertEquals([1,2,3,4,5,6,7,8,9], InsertionSort::sort($arr));
        $this->assertEquals([1,2,3,4,5,6,7,8,9], InsertionSort::sort($arr, "variant2"));
    }

    /*
    * @return array
    */
    public static function arrayProvider(): array
    {
        return [
        [[1,2,3,4,5,6,7,8,9]],
        [[9,8,7,6,5,4,3,2,1]],
        [[1,2,3,9,8,7,6,5,4]],
        [[9,8,7,1,2,3,4,5,6]],
        [[9,1,8,2,7,3,6,4,5]],
        [[1,9,2,8,3,7,4,6,5]],
        [[6,4,1,8,3,9,2,5,7]],
    ];
    }

    #[Test]
    public function it_should_sort_single_element_array()
    {
        $this->assertEquals([4], InsertionSort::sort([4]));
        $this->assertEquals([4], InsertionSort::sort([4], "variant2"));
    }

    #[Test]
    public function test_empty_array()
    {
        $this->assertEquals([], InsertionSort::sort([]));
        $this->assertEquals([], InsertionSort::sort([], "variant2"));
    }

    #[Test]
    public function it_should_sort_non_consecutive_numbers_correctly()
    {
        $this->assertEquals([2,5,6,8,9], InsertionSort::sort([5,9,6,2,8]));
        $this->assertEquals([2,5,6,8,9], InsertionSort::sort([5,9,6,2,8], "variant2"));
    }

    #[Test]
    public function it_can_sort_array_with_1000_elements()
    {
        $random = range(1, 1000);
        shuffle($random);
        $this->assertEquals(range(1, 1000), InsertionSort::sort($random));
        $this->assertEquals(range(1, 1000), InsertionSort::sort($random, "variant2"));
    }
}
