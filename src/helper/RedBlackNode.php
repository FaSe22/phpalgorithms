<?php

namespace Src\helper;

use Src\helper\enums\Color;

class RedBlackNode
{
    public function __construct(
        private int           $value,
        private Color         $color = Color::Red,
        private ?RedBlackNode $left = null,
        private ?RedBlackNode $right = null
    ) {}
}
