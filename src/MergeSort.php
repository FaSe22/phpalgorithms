<?php

namespace Src;

class MergeSort
{
    /**
     * @param array<int, float> $arr
     * @return array<int, float>
     */
    public static function sort(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        $middle = (int)(count($arr)/2);
        $left = array_splice($arr, 0, $middle);
        $right = $arr;
        $left = self::sort($left);
        $right = self::sort($right);
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
        do {
            if ($left[$i]<$right[$j]) {
                $result[] = $left[$i];
                $i++;
            } else {
                $result[] = $right[$j];
                $j++;
            }
        } while($i<count($left) && $j<count($left));
        for (; $i<count($left); $i++) {
            $result[] = $left[$i];
        }
        for (; $j<count($right); $j++) {
            $result[] = $right[$j];
        }
        return $result;
    }
}
