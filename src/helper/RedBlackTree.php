<?php

namespace Src\helper;

use Src\helper\Enum\Color;

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
        $pointer = $this->root;
        do {
            if ($node->getValue() < $pointer->getValue()) {
                if ($pointer->getLeft() == null) {
                    $pointer->setLeft($node);
                    break;
                }
                $pointer = $pointer->getLeft();
            } else {
                if ($pointer->getRight() == null) {
                    $pointer->setRight($node);
                    break;
                }
                $pointer = $pointer->getLRight();
            }
        } while (true);
    }
}
