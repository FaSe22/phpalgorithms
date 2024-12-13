<?php

namespace Src\helper;

use Src\helper\Enum\Color;

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

    public function setColor(Color $color): void
    {
        $this->color = $color;
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
