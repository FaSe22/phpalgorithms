<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\BinaryTree;
use Src\helper\CustomDataProvider;

final class BinaryTreeTest extends TestCase
{
    /**
     * @param array<int> $arr
     */
    #[Test]
    #[DataProvider('arrayProvider')]
    public function it_should_return_the_sorted_array(array $arr): void
    {
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], BinaryTree::sort($arr));
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
        $this->assertEquals([4], BinaryTree::sort([4]));
    }

    #[Test]
    public function test_empty_array(): void
    {
        $this->assertEquals([], BinaryTree::sort([]));
    }

    #[Test]
    public function it_should_sort_non_consecutive_numbers_correctly(): void
    {
        $this->assertEquals([2, 5, 6, 8, 9], BinaryTree::sort([5, 9, 6, 2, 8]));
    }

    #[Test]
    public function it_can_sort_array_with_1000_elements(): void
    {
        $this->assertEquals(range(1, 999), BinaryTree::sort(CustomDataProvider::oneToNineNineNine()[0][0]));
    }
}
