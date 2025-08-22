<?php

namespace Src\helper;

use Src\helper\Enum\Color;
use Src\helper\Enum\Direction;

class RedBlackNode
{
    /**
     * @param int $value
     * @param RedBlackNode|null $parent
     * @param Color $color
     * @param RedBlackNode|null $left
     * @param RedBlackNode|null $right
     */
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

    public function setLeft(?RedBlackNode $node): void
    {
        $this->left = $node;
        $node?->setParent($this);
    }

    public function getRight(): ?RedBlackNode
    {
        return $this->right;
    }

    public function setRight(?RedBlackNode $node): void
    {
        $this->right = $node;
        $node?->setParent($this);
    }

    /**
     * Check if $this node is the child of its parents in $direction
     *
     * @param Direction $direction
     * @return bool
     */
    public function isChild(Direction $direction): bool
    {
        if (!$this->parent) {
            return false;
        } elseif ($this->parent->{$direction->operation('get')}() === $this) {
            return true;
        }
        return false;
    }

    /**
     * Returns the sibling of the parent of $this
     *
     * @return RedBlackNode|null
     */
    public function uncle(): ?RedBlackNode
    {
        if (!$this->parent || !$this->parent->getParent()) {
            return null;
        }
        return $this->parent->sibling();
    }

    /**
     * Return the opposite child of the parents to $this
     *
     * @return RedBlackNode|null
     */
    public function sibling(): ?RedBlackNode
    {
        if (!$this->parent) {
            return null;
        }
        return $this->isChild(Direction::Left)
            ? $this->parent->getRight()
            : $this->parent->getLeft();
    }

    /**
     * Rotate the subtree around $this in the $direction and updates relations
     *
     * @param RedBlackTree $tree
     * @param Direction $direction
     * @return void
     */
    public function rotate(RedBlackTree $tree, Direction $direction): void
    {
        if (!$this->{$direction->opposite()->value}) {
            return;
        }
        $grandchild = $this->{$direction->opposite()->value}->{$direction->operation('get')}();
        $this->updateParent($tree, $direction->opposite());
        $this->{$direction->opposite()->value}->{$direction->operation('set')}($this);
        $this->{$direction->opposite()->operation('set')}($grandchild);
    }

    /**
     * Update the parent of the node to the child in the $direction
     * should $this be root (both children checks null), update parent to null and set child in $direction as new root
     *
     * @param RedBlackTree $tree
     * @param Direction $direction
     * @return void
     */
    private function updateParent(RedBlackTree $tree, Direction $direction): void
    {
        if ($this->isChild(Direction::Left)) {
            $this->parent->setLeft($this->{$direction->value});
        } elseif ($this->isChild(Direction::Right)) {
            $this->parent->setRight($this->{$direction->value});
        } else {
            $this->{$direction->value}->setParent(null);
            $tree->setRoot($this->{$direction->value});
        }
    }
}
