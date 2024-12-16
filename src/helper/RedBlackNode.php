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

    public function setParent(?RedBlackNode $node): void
    {
        $this->parent = $node;
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

    public function isLeftChild(): bool
    {
        if ($this->parent && $this->parent->getLeft() === $this) {
            return true;
        }
        return false;
    }

    public function isRightChild(): bool
    {
        if ($this->parent && $this->parent->getRight() === $this) {
            return true;
        }
        return false;
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

    public function sibling(): ?RedBlackNode
    {
        if (!$this->parent) {
            return null;
        }
        return $this === $this->parent->getLeft()
            ? $this->parent->getRight()
            : $this->parent->getLeft();
    }

    public function rotateRight(RedBlackTree $tree): void
    {
        if (!$this->left) {
            return;
        }
        $parent = $this->parent;
        if ($parent) {
            if ($parent->getLeft() === $this) {
                $parent->setLeft($this->left);
            } else {
                $parent->setRight($this->left);
            }
            $this->left->setParent($parent);
        } else {
            $this->left->setParent(null);
            $tree->setRoot($this->left);
        }
        $this->parent = $this->left;
        $leftRightGrandchild = $this->parent->getRight();
        $this->parent->setRight($this);
        $this->left = $leftRightGrandchild;
        $leftRightGrandchild?->setParent($this);
    }

    public function rotateLeft(RedBlackTree $tree): void
    {
        if (!$this->right) {
            return;
        }
        $parent = $this->parent;
        if ($parent) {
            if ($parent->getLeft() === $this) {
                $parent->setLeft($this->right);
            } else {
                $parent->setRight($this->right);
            }
            $this->right->setParent($parent);
        } else {
            $this->right->setParent(null);
            $tree->setRoot($this->right);
        }
        $this->parent = $this->right;
        $rightLeftGrandchild = $this->parent->getLeft();
        $this->parent->setLeft($this);
        $this->right = $rightLeftGrandchild;
        $rightLeftGrandchild?->setParent($this);
    }
}
