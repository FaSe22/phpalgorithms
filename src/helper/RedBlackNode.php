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

    public function getValue(): int
    {
        return $this->value;
    }

    public function getColor(): Color
    {
        return $this->color;
    }

    public function getLeft(): ?RedBlackNode
    {
        return $this->left;
    }

    public function getRight(): ?RedBlackNode
    {
        return $this->right;
    }
}
