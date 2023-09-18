<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Src\Bubblesort;

final class BubblesortTest extends TestCase
{
    #[Test]
    #[DataProvider('arrayProvider')]
    public function it_should_return_the_sorted_array($arr)
    {
        $this->assertEquals([1,2,3,4,5,6,7,8,9], Bubblesort::sort($arr));
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
}
