<?php

namespace Tests\Benchmark;

use Src\Bubblesort;

class BubblesortBench{

  /**
  * @Revs(1000)
  * @Iterations(5)
  */
  public function benchBubblesort()
  {
    Bubblesort::sort([4,8,2,7,9,5, 6,1,3]);
  }
}
