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

    /**
     * @param $arr
     * @return array
     */
    private static function variant2($arr): array {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j=0; $j < count($arr); $j++) {
                if ($arr[$i] < $arr[$j]) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
        return $arr;
    }

    /**
     * @param $arr
     * @return array
     */
    private static function variant3($arr): array {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j=$i; $j < count($arr); $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
        return $arr;
    }

    /**
     * @param $arr
     * @return array
     */
    private static function variant4($arr): array {
        do {
            $check = false;
            for ($i=0; $i < count($arr)-1; $i++) {
                if ($arr[$i] > $arr[$i+1]) {
                    $tmp = $arr[$i+1];
                    $arr[$i] = $arr[$i+1];
                    $arr[$i+1] = $tmp;
                    $check = true;
                }
            }
        } while ($check);
        return $arr;
    }
}
