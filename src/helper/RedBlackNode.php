<?php

namespace Src\helper;

use Src\helper\Enum\Color;

class RedBlackNode
{
    public function __construct(
        private readonly int  $value,
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
        $node->setParent($this);
    }

    public function getRight(): ?RedBlackNode
    {
        return $this->right;
    }

    public function setRight(RedBlackNode $node): void
    {
        $this->right = $node;
        $node->setParent($this);
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
        return $this->parent->isLeftChild()
            ? $this->parent->getParent()->getRight()
            : $this->parent->getParent()->getLeft();
    }

    public function sibling(): ?RedBlackNode
    {
        if (!$this->parent) {
            return null;
        }
        return $this->isLeftChild()
            ? $this->parent->getRight()
            : $this->parent->getLeft();
    }

    public function rotateRight(RedBlackTree $tree): void
    {
        if (!$this->left) {
            return;
        }
        $leftRightGrandchild = $this->left->getRight();
        $this->updateParent($tree, 'left');
        $this->left->setRight($this);
        $this->left = $leftRightGrandchild;
        $leftRightGrandchild?->setParent($this);
    }

    public function rotateLeft(RedBlackTree $tree): void
    {
        if (!$this->right) {
            return;
        }
        $rightLeftGrandchild = $this->right->getLeft();
        $this->updateParent($tree, 'right');
        $this->right->setLeft($this);
        $this->right = $rightLeftGrandchild;
        $rightLeftGrandchild?->setParent($this);
    }

    /**
     * Update the parent of the node to the child in the $direction
     * should $this be the root, update parent to null and set the child in $direction as new root
     *
     * @param RedBlackTree $tree
     * @param string $direction left|right
     * @return void
     */
    private function updateParent(RedBlackTree $tree, string $direction): void
    {
        $parent = $this->parent;
        if ($parent) {
            if ($this->isLeftChild()) {
                $parent->setLeft($this->$direction);
            } else {
                $parent->setRight($this->$direction);
            }
        } else {
            $this->$direction->setParent(null);
            $tree->setRoot($this->$direction);
        }
    }
}
