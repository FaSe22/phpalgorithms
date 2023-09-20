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

    public function __construct(Node $node = null)
    {
        $this->parent = $node;
        $this->left = null;
        $this->right = null;
    }

    public function parent(): Node
    {
        return $this->parent;
    }

    public function left(): Node
    {
        return $this->left;
    }

    public function right(): Node
    {
        return $this->right;
    }

    public function setLeft(): Node
    {
        $newNode = new Node($this);
        return $this->left = $newNode;
    }

    public function setRight(): Node
    {
        $newNode = new Node($this);
        return $this->right = $newNode;
    }
}
