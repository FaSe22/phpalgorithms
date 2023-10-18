<?php

namespace Src;

class Insertionsort
{
    /**
    * @param array $arr
    * @return array
    */
    public static function sort(array $arr, String $method = "variant1"): array
    {
        return self::$method($arr);
    }

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
}
