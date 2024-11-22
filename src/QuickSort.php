<?php

namespace Src;

class QuickSort
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
        $pivot = $arr[0];
        $right = [];
        $left = [];
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $pivot) {
                $right[] = $arr[$i];
            } else {
                $left[] = $arr[$i];
            }
        }
        $right = self::sort($right);
        $right[] = $pivot;
        $left = self::sort($left);

        return array_merge($right, $left);
    }
}
