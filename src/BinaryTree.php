<?php

namespace Src;

class BinaryTree
{
    /**
    * @param array $arr
    * @return array
    */
    public static function sort(array $arr): array
    {
        return $arr;
    }
}

class Node
{
    private Node|null $parent;
    private Node|null $right;
    private Node|null $left;
    private $value;

    public function __construct($value, Node $node = null)
    {
        $this->parent = $node;
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }

    public function parent(): Node
    {
        return $this->parent;
    }

    public function value()
    {
        return $this->value;
    }

    public function left(): Node
    {
        return $this->left;
    }

    public function right(): Node
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
}
