<?php

namespace Src\helper;

class Node
{
    private Node|null $parent;
    private Node|null $right;
    private Node|null $left;
    private Int $value;

    public function __construct($value, Node $node = null)
    {
        $this->parent = $node;
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }

    public function parent(): Node|null
    {
        return $this->parent;
    }

    public function value(): Int
    {
        return $this->value;
    }

    public function left(): Node|null
    {
        return $this->left;
    }

    public function right(): Node|null
    {
        return $this->right;
    }

    public function setLeft($value): Node
    {
        $newNode = new Node($value, $this);

        return $this->left = $newNode;
    }

    public function setRight($value): Node
    {
        $newNode = new Node($value, $this);

        return $this->right = $newNode;
    }

    /**
     * @return array<int, float>
     */
    public function flatten(): array
    {
        $left = [];
        $right = [];
        if ($this->left() != null) {
            $left = $this->left()->flatten();
        }
        if ($this->right != null) {
            $right = $this->right()->flatten();
        }

        return array_merge($left, [$this->value], $right);
    }
}
