<?php

namespace Src;

class Bubblesort
{
    public static function sort(array $arr): array
    {
        /**
 *
 * @var int[] $arr
 */
        $arr = $arr;
        for ($j = count($arr) - 1; $j > 0; $j--) {
            for($i = 0; $i < $j; $i++) {
                if($arr[$i] > $arr[$i + 1]) {
                    [$arr[$i],  $arr[$i + 1]] = [$arr[$i + 1], $arr[$i]];
                }
            }
        }
        return $arr;
    }
}
