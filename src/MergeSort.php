<?php

namespace Src;

class MergeSort
{
    /**
     * @param array<int, float> $arr
     * @param String $method name of the methode to use for sorting
     * @return array<int, float>
     */
    public static function sort(array $arr, String $method = "variant1"): array
    {
        return self::$method($arr);
    }

    /**
     * @param array<int, float> $arr
     * @return array<int, float>
     */
    public static function variant1(array $arr): array
    {
        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }
        $middle = (int)($length / 2);
        $left = array_splice($arr, 0, $middle);
        $left = self::sort($left);
        $right = self::sort($arr);

        return self::merge($left, $right);
    }

    /**
     * @param array<int, float> $left
     * @param array<int, float> $right
     * @return array<int, float>
     */
    public static function merge(array $left, array $right)
    {
        $i = 0;
        $j = 0;
        $result = [];
        $lengthLeft = count($left);
        $lengthRight = count($right);
        while ($i < $lengthLeft && $j < $lengthRight) {
            if ($left[$i] < $right[$j]) {
                $result[] = $left[$i];
                $i++;
            } else {
                $result[] = $right[$j];
                $j++;
            }
        }
        for (; $i < $lengthLeft; $i++) {
            $result[] = $left[$i];
        }
        for (; $j < $lengthRight; $j++) {
            $result[] = $right[$j];
        }

        return $result;
    }
}
