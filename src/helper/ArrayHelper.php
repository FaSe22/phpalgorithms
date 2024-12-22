<?php

namespace Src\helper;

class ArrayHelper
{
    /**
     * Returns the smallest value of the array
     *
     * @param array<int, int|float> $array
     * @return int|float
     */
    public static function getMin(array $array): int|float
    {
        return min($array);
    }

    /**
     * Returns the biggest value of the array
     *
     * @param array<int, int|float> $array
     * @return int|float
     */
    public static function getMax(array $array): int|float
    {
        return max($array);
    }
}
