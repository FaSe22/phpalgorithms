<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\Bubblesort;
use Src\helper\CustomDataProvider;

final class BubblesortTest extends TestCase
{
    #[Test]
    #[DataProvider('arrayProvider')]
    public function it_should_return_the_sorted_array($arr)
    {
        $this->assertEquals([1,2,3,4,5,6,7,8,9], Bubblesort::sort($arr));
    }

    #[Test]
    #[DataProvider('variantProvider')]
    public function it_should_return_the_sorted_array_for_variants($variant)
    {
        $this->assertEquals([1,2,3,4,5,6,7,8,9], Bubblesort::sort([9,5,6,8,3,2,1,4,7], $variant));
    }

    /*
    * @return array
    */
    public static function arrayProvider(): array
    {
        return CustomDataProvider::oneToNine();
    }

    /*
    * @return array
    */
    public static function variantProvider(): array
    {
        return [
          ['variant1'],
          ['variant2'],
          ['variant3'],
          ['variant4'],
          ['variant5'],
        ];
    }

    #[Test]
    #[DataProvider('variantProvider')]
    public function it_should_sort_single_element_array($variant)
    {
        $this->assertEquals([4], Bubblesort::sort([4], $variant));
    }

    #[Test]
    #[DataProvider('variantProvider')]
    public function test_empty_array($variant)
    {
        $this->assertEquals([], Bubblesort::sort([], $variant));
    }

    #[Test]
    #[DataProvider('variantProvider')]
    public function it_should_sort_non_consecutive_numbers_correctly($variant)
    {
        $this->assertEquals([2,5,6,8,9], Bubblesort::sort([5,9,6,2,8], $variant));
    }
}
