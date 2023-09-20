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
        $tree = new Tree($arr[0]);
        for ($i=1; $i<count($arr); $i++) {
            $tree->put($arr[$i]);
        }
        return $tree->root()->flatten();
    }
}

class Tree
{
    private Node|null $root = null;

    public function __construct($value)
    {
        $this->root = new Node($value);
    }

    public function root(): Node
    {
        return $this->root;
    }

    public function put($value, Node $node=null): void
    {
        if ($node == null) {
            $this->put($value, $this->root);
        }
        if ($node->value() > $value) {
            $this->put($value, $node->right());
        } else {
            $this->put($value, $node->left());
        }
    }
}

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

    public function parent(): Node
    {
        return $this->parent;
    }

    public function value(): Int
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

    public function flatten(): array
    {
        $left = [];
        $right = [];
        if ($this->left() != null) {
            $left = $this->left()->flatten();
        }
        if ($this->right != null) {
            $right =  $this->right()->flatten();
        }
        return array_merge($left, [$this->value], $right);
    }
}
