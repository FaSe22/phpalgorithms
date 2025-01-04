<?php

namespace Src\helper;

class Tree
{
    private ?Node $root;

    /**
     * @param float|int $value
     */
    public function __construct(float|int $value)
    {
        $this->root = new Node($value);
    }

    /**
     * @return Node|null
     */
    public function root(): ?Node
    {
        return $this->root;
    }

    /**
     * @param float|int $value
     * @param Node|null $node
     * @return void
     */
    public function put(float|int $value, Node $node = null): void
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
