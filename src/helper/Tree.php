<?php

namespace Src\helper;

class Tree
{
    private ?Node $root;

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
            return;
        }
        if ($node->value() < $value) {
            if ($node->right() == null) {
                $node->setRight($value);
            } else {
                $this->put($value, $node->right());
            }
        } else {
            if ($node->left() == null) {
                $node->setLeft($value);
            } else {
                $this->put($value, $node->left());
            }
        }
    }
}
