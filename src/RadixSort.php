<?php

namespace Src;

class RadixSort
{
    /**
     * @param array<int> $arr
     * @return array<int>
     */
    public static function sort(array $arr): array
    {
        $n = count($arr);
        $partitions = [];
        for ($i = 0; $i < $n; $i++) {
            $partitions[$arr[$i] % 10][] = $arr[$i];
        }
        $arr = [];
        for ($i = 0; $i < 10; $i++) {
            $arr = array_merge($arr, $partitions[$i] ?? []);
        }
        return $arr;
    }
}
