<?php

namespace Src;

class BucketSort
{
    /**
     * @param array<int, int|float> $arr
     * @return array<int, int|float>
     */
    public static function sort(array $arr): array
    {
        $length = count($arr);
        $min = min($arr);
        $max = max($arr);
        if ($min == $max) {
            return $arr;
        }
        $range = $max - $min;
        $bucketSize = (int)sqrt($length);
        $buckets = [];
        foreach ($arr as $element) {
            $index = (($element - $min) / $range) * ($bucketSize - 1);
            $buckets[(int)$index][] = $element;
        }
        return $arr;
    }
}
