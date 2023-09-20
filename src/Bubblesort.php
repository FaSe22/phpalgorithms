<?php

namespace Src;

class Bubblesort
{
    /**
     * @param array $arr
     * @param String $method name of the methode to use for sorting
     * @return array
     */
    public static function sort(array $arr, String $method="variant1"): array
    {
        return self::$method($arr);
    }

    /**
     * @param $arr
     * @return array
     */
    private static function variant1($arr): array {
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
