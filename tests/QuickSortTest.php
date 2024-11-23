<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\helper\CustomDataProvider;
use Src\QuickSort;

final class QuickSortTest extends TestCase
{
    /**
     * @param array<int> $arr
     */
    #[Test]
    #[DataProvider('arrayProvider')]
    public function it_should_return_the_sorted_array(array $arr): void
    {
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], QuickSort::sort($arr));
    }

    /**
     * @return array<int, array<int, array<int, int>>>
     */
    public static function arrayProvider(): array
    {
        return CustomDataProvider::oneToNine();
    }

    #[Test]
    public function it_should_sort_single_element_array(): void
    {
        $this->assertEquals([4], QuickSort::sort([4]));
    }

    #[Test]
    public function test_empty_array(): void
    {
        $this->assertEquals([], QuickSort::sort([]));
    }

    #[Test]
    public function it_should_sort_non_consecutive_numbers_correctly(): void
    {
        $this->assertEquals([2, 5, 6, 8, 9], QuickSort::sort([5, 9, 6, 2, 8]));
    }

    #[Test]
    public function it_can_sort_array_with_1000_elements(): void
    {
        $random = CustomDataProvider::oneToNineNineNine()[0][0];
        $this->assertEquals(range(1, 999), QuickSort::sort($random));
    }
}
