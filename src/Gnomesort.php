<?php

namespace Src;

class Gnomesort
{
    /**
     * @param array<int> $arr
     * @return array<int>
     */
    public static function sort(array $arr): array
    {
        $i = 0;
        $n = count($arr);
        while ($i < $n - 1) {
            if ($arr[$i] > $arr[$i + 1]) {
                [$arr[$i], $arr[$i + 1]] = [$arr[$i + 1], $arr[$i]];
                $i = max(0, $i - 1);
            } else {
                $i++;
            }
        }
        return $arr;
    }
}
