<?php

namespace Src\helper;

use Src\helper\Enum\Color;

class RedBlackNode
{
    public function __construct(
        private int           $value,
        private ?RedBlackNode $parent = null,
        private Color         $color = Color::Red,
        private ?RedBlackNode $left = null,
        private ?RedBlackNode $right = null
    ) {}

    public function getValue(): int
    {
        return $this->value;
    }

    public function getParent(): ?RedBlackNode
    {
        return $this->parent;
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

    public function setLeft(RedBlackNode $node): void
    {
        $this->left = $node;
    }

    public function getRight(): ?RedBlackNode
    {
        return $this->right;
    }

    public function setRight(RedBlackNode $node): void
    {
        $this->right = $node;
    }

    public function uncle(): ?RedBlackNode
    {
        if (!$this->parent || !$this->parent->getParent()) {
            return null;
        }
        return $this->parent === $this->parent->getParent()->getLeft()
            ? $this->parent->getParent()->getRight()
            : $this->parent->getParent()->getLeft();
    }
}
