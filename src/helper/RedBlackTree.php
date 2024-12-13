<?php

namespace Src\helper;

use Src\helper\enums\Color;

class RedBlackTree
{
    public function __construct(private ?RedBlackNode $root = null) {}

    public function getRoot(): ?RedBlackNode
    {
        return $this->root;
    }

    public function insert(RedBlackNode $node): void
    {
        if ($this->root == null) {
            $this->root = $node;
            $node->setColor(Color::Black);
        }
    }
}
