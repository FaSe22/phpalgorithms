<?php

namespace Src\helper;

class MinHeap
{
    private array $heap;

    /**
     * Insert the provided into the heap
     *
     * @param int|float $value
     * @return void
     */
    public function insert(int|float $value): void
    {
        $length = count($this->heap);
        $this->heap[$length] = $value;
        if ($length == 0) {
            return;
        }
        $index = $length;
        while ($index > 0 && $this->heap[(int)(($index - 1) / 2)] < $value) {
            [$this->heap[(int)(($index - 1) / 2)], $this->heap[$index]] = [$this->heap[$index], $this->heap[(int)(($index - 1) / 2)]];
            $index = (int)(($index - 1) / 2);
        }
    }

    /**
     * Delete the provided value from the heap
     *
     * @param int|float $value
     * @return void
     */
    public function delete(int|float $value): void {}

    /**
     * Returns the min value of the heap or null if heap is empty.
     *
     * @return int|float|null The peak value, or null if not applicable.
     */
    public function peak(): int|float|null
    {
        return $this->heap[0] ?? null;
    }

    /**
     * Heapify the array
     *
     * @return void
     */
    private function heapify(): void {}
}
