<?php

namespace Src;

class BucketSort
{
    private static string $sortingAlgorithm = "Src\\Gnomesort";

    /**
     * @param array<int, int|float> $arr
     * @return array<int, int|float>
     */
    public static function sort(array $arr): array
    {
        $length = count($arr);
        if ($length == 0 || $min= min($arr) == $max = max($arr)) {
            return $arr;
        }
        $range = $max - $min;
        $bucketSize = (int)sqrt($length);
        $buckets = [];
        foreach ($arr as $element) {
            $index = (($element - $min) / $range) * ($bucketSize - 1);
            $buckets[(int)$index][] = $element;
        }
        for ($i = 0; $i<$bucketSize; $i++) {
            $buckets[$i] = self::$sortingAlgorithm::sort($buckets[$i]);
        }
        $result = [];
        for($i = 0; $i<$bucketSize; $i++) {
            $result = array_merge($result, $buckets[$i]);
        }
        return $result;
    }
}
