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
        $bucketSize = (int)sqrt($length);
        $buckets = [];
        foreach ($arr as $element) {
            $buckets[(int)$element%$bucketSize][] = $element;
        }
        return $arr;
    }
}
