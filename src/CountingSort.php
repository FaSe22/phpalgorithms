<?php

namespace Src;

use Src\helper\ArrayHelper;

class CountingSort
{
    /**
     * @param array<int> $arr
     * @return array<int>
     */
    public static function sort(array $arr): array
    {
        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }
        $minElement = ArrayHelper::getMin($arr);
        $maxElement = ArrayHelper::getMax($arr);
        $helperArray = [];
        for ($i = $minElement; $i <= $maxElement; $i++) {
            $helperArray[$i] = 0;
        }
        foreach ($arr as $element) {
            $helperArray[$element]++;
        }
        for ($i = $minElement+1; $i <= $maxElement; $i++) {
            $helperArray[$i] += $helperArray[$i-1];
        }
        return $arr;
    }
}
