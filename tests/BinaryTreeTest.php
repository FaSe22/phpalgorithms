<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\BinaryTree;

final class BinaryTreeTest extends TestCase
{
    #[Test]
    #[DataProvider('arrayProvider')]
    public function it_should_return_the_sorted_array(array $arr): void
    {
        $this->assertEquals([1,2,3,4,5,6,7,8,9], BinaryTree::sort($arr));
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
        $this->assertEquals([2,5,6,8,9], BinaryTree::sort([5,9,6,2,8]));
    }

    #[Test]
    public function it_can_sort_array_with_1000_elements(): void
    {
        $random = range(1, 1000);
        shuffle($random);
        $this->assertEquals(range(1, 1000), BinaryTree::sort($random));
    }
}
