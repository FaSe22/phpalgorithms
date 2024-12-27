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
    public function insert(int|float $value): void {}

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
}
