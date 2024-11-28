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
        if($n === 0){
            return $arr;
        }
        $divider = 10;
        while (true) {
            $partitions = [];
            for ($i = 0; $i < $n; $i++) {
                $partitions[(int)(($arr[$i] % $divider) / ($divider/10))][] = $arr[$i];
            }
            $arr = [];
            if (!empty($partitions[0]) && count($partitions[0]) == $n) {
                return $partitions[0];
            }
            for ($i = 0; $i < 10; $i++) {
                $arr = array_merge($arr, $partitions[$i] ?? []);
            }
            $divider = $divider * 10;
        }
    }
}
