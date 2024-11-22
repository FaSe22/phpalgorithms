<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\helper\CustomDataProvider;
use Src\MergeSort;

final class MergeSortTest extends TestCase
{
    #[Test]
    #[DataProvider('arrayProvider')]
    public function it_should_return_the_sorted_array($arr)
    {
        $this->assertEquals([1,2,3,4,5,6,7,8,9], MergeSort::sort($arr));
    }

    /*
    * @return array
    */
    public static function arrayProvider(): array
    {
        return CustomDataProvider::oneToNine();
    }

    #[Test]
    public function it_should_sort_single_element_array()
    {
        $this->assertEquals([4], MergeSort::sort([4]));
    }

    #[Test]
    public function test_empty_array()
    {
        $this->assertEquals([], MergeSort::sort([]));
    }

    #[Test]
    public function it_should_sort_non_consecutive_numbers_correctly()
    {
        $this->assertEquals([2,5,6,8,9], MergeSort::sort([5,9,6,2,8]));
    }

    #[Test]
    public function it_can_sort_array_with_1000_elements()
    {
        $random = CustomDataProvider::oneToNineNineNine()[0][0];
        $this->assertEquals(range(1, 999), MergeSort::sort($random));
    }
}
