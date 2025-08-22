<?php

namespace Src;

class SelectionSort
{
    /**
     * @param array<int> $arr
     * @return array<int>
     */
    public static function sort(array $arr): array
    {
        $length = count($arr);
        for ($i = 0; $i < $length; $i++) {
            $smallest = ['index' => $i, 'value' => $arr[$i]];
            for ($j = $i + 1; $j < $length; $j++) {
                if ($arr[$j] < $smallest['value']) {
                    $smallest = ['index' => $j, 'value' => $arr[$j]];
                }
            }
            if ($smallest['index'] != $i) {
                [$arr[$smallest['index']], $arr[$i]] = [$arr[$i], $arr[$smallest['index']]];
            }
        }
        return $arr;
    }
}
