<?php

namespace Src;

class Insertionsort
{
    /**
     * @param array<int,float> $arr
     * @param String $method the variant of sorting algorithm to use as a String (default="variant1")
     * @return array<int,float>
     */
    public static function sort(array $arr, String $method = "variant1"): array
    {
        return self::$method($arr);
    }

    /**
     * @param array<int,float> $arr
     * @return array<int,float>
     */
    private static function variant1(array $arr): array
    {
        // iterate over all elements
        for ($i = 1; $i < count($arr); $i++) {
            // safe current element of iteration
            $element = $arr[$i];
            // loop over already passed array
            for ($j = 0; $j <= $i; $j++) {
                //check if the condition for the placement on this index is met
                if ($arr[$j] > $element) {
                    // switch elements at the current position
                    $safe = $arr[$j];
                    $arr[$j] = $element;
                    $element = $safe;
                }
            }
            $arr[$i] = $element;
        }
        return $arr;
    }

    /**
     * @param array<int,float> $arr
     * @return array<int,float>
     */
    private static function variant2(array $arr): array
    {
        // start from the first array and iterate over all
        for ($i = 0; $i < count($arr); $i++) {
            // assume the first element is the smallest
            $index = $i;
            // loop over the rest of the array
            for ($j = $i; $j < count($arr); $j++) {
                // check if the current element is smaller
                if ($arr[$j]<$arr[$index]) {
                    // replace the saved index
                    $index = $j;
                }
            }
            // We now know the smallest number is at $index and can replace it with the starting position
            $safe = $arr[$index];
            $arr[$index] = $arr[$i];
            $arr[$i] = $safe;
        }
        return $arr;
    }
}
