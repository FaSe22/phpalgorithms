<?php

namespace Src;

use Src\helper\ArrayHelper;

class Countingsort
{
    /**
     * @param array<int> $arr
     * @return array<int>
     */
    public static function sort(array $arr): array
    {
        $length = count($arr);
        if ($length == 0) {
            return $arr;
        }
        $minElement = ArrayHelper::getMin($arr);
        $maxElement = ArrayHelper::getMax($arr);
        $helperArray = [];
        for($i = $minElement; $i <= $maxElement; $i++){
            $helperArray[$i] = 0;
        }
        return $arr;
    }
}
