<?php

namespace Src;

use Src\helper\Tree;

class BinaryTree
{
    /**
     * @param array<int, float> $arr
     * @return array<int, float>
     */
    public static function sort(array $arr): array
    {
        if (empty($arr)) {
            return [];
        }
        $tree = new Tree($arr[0]);
        for ($i = 1; $i < count($arr); $i++) {
            $tree->put($arr[$i]);
        }

        return $tree->root()->flatten();
    }
}
