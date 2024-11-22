<?php

namespace Src;

use Src\helper\Shaker;

class Shakersort
{
    /**
     * @param array<int> $arr
     * @return array<int>
     */
    public static function sort(array $arr): array
    {
        $shaker = new Shaker();
        $run = true;
        $length = count($arr);
        $i = 0;
        while ($run) {
            $run = false;
            for (; $shaker->continue($i, $length - 1); $i = $shaker->move($i)) {
                $neighbor = $shaker->neighbor($i);
                if ($shaker->check($arr[$i], $arr[$neighbor])) {
                    [$arr[$neighbor], $arr[$i]] = [$arr[$i], $arr[$neighbor]];
                    $run = true;
                }
            }
            $shaker->switch();
        }

        return $arr;
    }
}
