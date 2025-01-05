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
                $newNode = new Node($value, $node);
                $node->setRight($newNode);
            } else {
                $this->put($value, $node->right());
            }
        } else {
            if ($node->left() == null) {
                $newNode = new Node($value, $node);
                $node->setLeft($newNode);
            } else {
                $this->put($value, $node->left());
            }
        }
    }

    /**
     * search for node with provided value and remove it from tree
     *
     * @param float|int $value to search and remove
     * @return float|int|null the value found or null on not existing
     */
    public function pull(float|int $value): float|int|null
    {
        $pointer = $this->root;
        while ($pointer && $pointer->value() != $value) {
            if ($pointer->value() < $value) {
                $pointer = $pointer->right();
            } elseif ($value < $pointer->value()) {
                $pointer = $pointer->left();
            }
        }
        if (!$pointer) {
            return null;
        }
        $replacement = $pointer->left() ?? $pointer->right();
        if ($pointer->parent()) {
            if ($pointer->parent()->left() === $pointer) {
                $pointer = $pointer->parent()->setLeft($replacement);
            } else {
                $pointer = $pointer->parent()->setRight($replacement);
            }
        } else {
            $this->root = $replacement;
        }
    }
}
