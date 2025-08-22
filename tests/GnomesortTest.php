<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\Gnomesort;
use Src\helper\CustomDataProvider;

final class GnomesortTest extends TestCase
{
    #[Test]
    #[DataProvider('arrayProvider')]
    /**
     * @param array<int> $arr
     */
    public function it_should_return_the_sorted_array(array $arr): void
    {
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], Gnomesort::sort($arr));
    }

    /**
     * @return array<array<int>>
     */
    public static function arrayProvider(): array
    {
        return CustomDataProvider::oneToNine();
    }

    #[Test]
    public function it_should_sort_single_element_array(): void
    {
        $this->assertEquals([4], Gnomesort::sort([4]));
    }

    #[Test]
    public function test_empty_array(): void
    {
        $this->assertEquals([], Gnomesort::sort([]));
    }

    #[Test]
    public function it_should_sort_non_consecutive_numbers_correctly(): void
    {
        $this->assertEquals([2, 5, 6, 8, 9], Gnomesort::sort([5, 9, 6, 2, 8]));
    }
}
