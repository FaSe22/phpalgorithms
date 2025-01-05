<?php

namespace Src\helper;

class Node
{
    private Node|null $parent;
    private Node|null $right;
    private Node|null $left;
    private float|int $value;

    /**
     * @param float|int $value
     * @param Node|null $node
     */
    public function __construct(float|int $value, Node $node = null)
    {
        $this->parent = $node;
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }

    /**
     * @return Node|null the parent of the node
     */
    public function parent(): Node|null
    {
        return $this->parent;
    }

    /**
     * @return float|int
     */
    public function value(): float|int
    {
        return $this->value;
    }

    /**
     * @return Node|null the left child
     */
    public function left(): Node|null
    {
        return $this->left;
    }

    /**
     * @return Node|null the right child
     */
    public function right(): Node|null
    {
        return $this->right;
    }

    /**
     * set the left child to provided Node
     *
     * @param Node $node
     * @return Node
     */
    public function setLeft(Node $node): Node
    {
        return $this->left = $node;
    }

    /**
     * set the right child to provided Node
     *
     * @param Node $node
     * @return Node
     */
    public function setRight(Node $node): Node
    {
        return $this->right = $node;
    }

    /**
     * travel the tree from the current node and return array representation
     *
     * @return array<int, float>
     */
    public function flatten(): array
    {
        $left = [];
        $right = [];
        if ($this->left != null) {
            $left = $this->left->flatten();
        }
        if ($this->right != null) {
            $right = $this->right->flatten();
        }

        return array_merge($left, [$this->value], $right);
    }
}
