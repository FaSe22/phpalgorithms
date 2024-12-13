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

    public function insert(int $value): void
    {
        if ($this->root == null) {
            $this->root = new RedBlackNode($value);
            $this->root->setColor(Color::Black);
        }
        $pointer = $this->root;
        do {
            if ($value < $pointer->getValue()) {
                if ($pointer->getLeft() == null) {
                    $pointer->setLeft(new RedBlackNode($value, $pointer));
                    break;
                }
                $pointer = $pointer->getLeft();
            } else {
                if ($pointer->getRight() == null) {
                    $pointer->setRight(new RedBlackNode($value, $pointer));
                    break;
                }
                $pointer = $pointer->getLRight();
            }
        } while (true);
    }
}
