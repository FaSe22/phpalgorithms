<?php

namespace Src\helper;

use Src\helper\enums\Color;

class RedBlackNode
{
    private ?RedBlackNode $left;
    private ?RedBlackNode $right;
    private int $value;
    private Color $color;

    public function __construct(int $value) {
        $this->value = $value;
        $this->color = Color::Red;
        $this->left = null;
        $this->right = null;
    }
}
