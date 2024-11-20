<?php

namespace Src;

use Closure;

class Shakersort
{
    /**
     * @param array<int> $arr
     * @return array<int>
     */
    public static function sort(array $arr): array
    {
        $strategy = new Strategy();
        $run = true;
        $length = count($arr);
        $i = 0;
        while ($run) {
            $run = false;
            for (; $strategy->continue($i, $length-1); $i = $strategy->move($i)) {
                $neighbor = $strategy->neighbor($i);
                if ($strategy->check($arr[$i], $arr[$neighbor])) {
                    [$arr[$neighbor], $arr[$i]] = [$arr[$i], $arr[$neighbor]];
                    $run = true;
                }
            }
            $strategy->switch();
        }
        return $arr;
    }
}

class Strategy
{
    private int $counter;
    private int $neighbor;
    private Closure $operator;
    private Closure $condition;

    public function __construct()
    {
        $this->counter = 1;
        $this->neighbor = 1;
        $this->operator = function ($a, $b) {
            return $a > $b;
        };
        $this->condition = function ($index, $length) {
            return $index < $length;
        };
    }

    /**
     * @param int $current position on the array
     * @return int next item in line
     */
    public function move(int $current): int
    {
        return $current + $this->counter;
    }

    /**
     * @param int $a current item
     * @param int $b neighboring item
     * @return bool if a switch needs to happen
     */
    public function check(int $a, int $b): bool
    {
        return ($this->operator)($a, $b);
    }

    /**
     * @param int $index of the current item
     * @return int index of the neighbor of the index element
     */
    public function neighbor(int $index): int
    {
        return $index + $this->neighbor;
    }

    /**
     * @param int $index of the current item
     * @param int $length of the array
     * @return bool if the loop should continue
     */
    public function continue(int $index, int $length): bool
    {
        return ($this->condition)($index, $length);
    }

    /**
     * Changes the operational order of the Strategy
     * @return void
     */
    public function switch(): void
    {
        $this->counter = $this->counter * -1;
        $this->neighbor = $this->neighbor * -1;
        if (($this->operator)(1, 2)) {
            $this->operator = function ($a, $b) {
                return $a > $b;
            };
        } else {
            $this->operator = function ($a, $b) {
                return $a < $b;
            };
        }
        if (($this->condition)(2, 2)) {
            $this->condition = function ($index, $length) {
                return $index < $length;
            };
        } else {
            $this->condition = function ($index, $length) {
                return $index > 0;
            };
        }
    }
}
