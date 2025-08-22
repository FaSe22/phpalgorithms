<?php

declare(strict_types=1);

namespace Tests\Helper;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\helper\ArrayHelper;

final class ArrayHelperTest extends TestCase
{
    #[Test]
    #[DataProvider('minMaxProvider')]
    public function it_should_return_the_minimum_value(array $array, int|float $expectedMin): void
    {
        $this->assertEquals($expectedMin, ArrayHelper::getMin($array));
    }

    #[Test]
    #[DataProvider('minMaxProvider')]
    public function it_should_return_the_maximum_value(array $array, int|float $expectedMin, int|float $expectedMax): void
    {
        $this->assertEquals($expectedMax, ArrayHelper::getMax($array));
    }

    #[Test]
    #[DataProvider('intValidationProvider')]
    public function it_should_check_if_array_consists_of_only_integers(array $array, bool $expected): void
    {
        $this->assertEquals($expected, ArrayHelper::consistsOfInt($array));
    }

    #[Test]
    #[DataProvider('isSortedProvider')]
    public function it_should_check_if_array_is_sorted(array $array, bool $expected): void
    {
        $this->assertEquals($expected, ArrayHelper::isSorted($array));
    }

    /**
     * Provides data for min and max tests
     *
     * @return array<int, array<int, mixed>>
     */
    public static function minMaxProvider(): array
    {
        return [
            [[1, 2, 3, 4, 5], 1, 5],
            [[-10, 0, 10, 20], -10, 20],
            [[5.5, 2.2, 3.3, 4.4], 2.2, 5.5],
            [[100], 100, 100],
            [[-5, -10, -15], -15, -5],
        ];
    }

    /**
     * Provides data for integer validation test
     *
     * @return array<int, array<int, mixed>>
     */
    public static function intValidationProvider(): array
    {
        return [
            [[1, 2, 3, 4, 5], true],
            [[1.1, 2.2, 3.3], false],
            [[1, 2, '3', 4], false],
            [[], true],
            [[100, -200, 0], true],
        ];
    }

    /**
     * Provides data for isSorted tests
     *
     * @return array<int, array<int, mixed>>
     */
    public static function isSortedProvider(): array
    {
        return [
            [[1, 2, 3, 4, 5], true],   // Sorted ascending
            [[5, 4, 3, 2, 1], false], // Descending
            [[1, 1, 1, 1], true],     // All equal
            [[], true],               // Empty array
            [[10], true],             // Single element
            [[1, 2, 2, 3, 4], true],  // Contains duplicates, sorted
            [[1, 3, 2, 4], false],    // Unsorted
        ];
    }
}
