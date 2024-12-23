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

    /**
     * Checks the array for non int values and return false if any occur
     *
     * @param array<int, mixed> $array
     * @return bool
     */
    public static function consistsOfInt(array $array): bool
    {
        return count($array) == count(array_filter($array, 'is_int'));
    }
}
