<?php

namespace Src;

class Gnomesort
{
    /**
     * @param array $arr
     * @return array
     */
    public static function sort(array $arr): array
    {
        $i = 0;
        while ($i < count($arr) - 1) {
            if ($arr[$i] > $arr[$i + 1]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $tmp;
                $i = max(0, $i - 1);
            } else {
                $i = $i + 1;
            }
        }
        return $arr;
    }
}
