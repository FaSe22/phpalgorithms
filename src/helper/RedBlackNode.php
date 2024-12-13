<?php

namespace Src\helper;

use Src\helper\enums\Color;

class RedBlackNode
{
    private RedBlackNode $left;
    private RedBlackNode $right;
    private int $value;
    private Color $color;
}
