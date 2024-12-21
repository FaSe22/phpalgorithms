<?php

namespace Src;

class ShellSort
{
    /**
     * @param array<int,float> $arr
     * @return array<int,float>
     */
    public static function sort(array $arr): array
    {
        $length = count($arr);
        $stepSequence = $length;
        do {
        } while ($stepSequence > 1);
        return $arr;
    }

    /**
     * Returns the next step sequence based on the current lenght/step
     *
     * @param int $start current step sequence or array length
     * @return int next lower step sequence
     */
    private static function stepSequence(int $start): int
    {
        $next = 1;
        while ($start > $new = ($next + 1) * 3) {
            $next = $new;
        }
        return $next;
    }
}
