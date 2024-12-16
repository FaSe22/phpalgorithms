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
            return;
        }
        $pointer = $this->root;
        do {
            if ($value < $pointer->getValue()) {
                if ($pointer->getLeft() == null) {
                    $pointer->setLeft(new RedBlackNode($value, $pointer));
                    $pointer = $pointer->getLeft();
                    break;
                }
                $pointer = $pointer->getLeft();
            } else {
                if ($pointer->getRight() == null) {
                    $pointer->setRight(new RedBlackNode($value, $pointer));
                    $pointer = $pointer->getRight();
                    break;
                }
                $pointer = $pointer->getRight();
            }
        } while (true);
        do {
            if ($pointer->getColor() == Color::Black) {
                break;
            }
            if ($pointer->uncle() && $pointer->uncle()->getColor() == Color::Red) {
                $pointer->getParent()->setColor(Color::Black);
                $pointer->uncle()->setColor(Color::Black);
                $pointer = $pointer->getParent()->getParent();
                continue;
            }
            if ($pointer->getParent()->isLeftChild() && $pointer->isLeftChild()) {
                $pointer->getParent()->getParent()->rotateRight();
                $this->fixRoot($pointer);
                $pointer->getParent()->setColor(Color::Black);
                $pointer->sibling()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isLeftChild() && $pointer->isRightChild()) {
                $pointer->getParent()->rotateLeft();
                $pointer->getParent()->rotateRight();
                $this->fixRoot($pointer);
                $pointer->setColor(Color::Black);
                $pointer->getRight()->setColor(Color::Red);
                continue;
            }
            if ($pointer->isRightChild() && $pointer->getParent()->isRightChild()) {
                $pointer->getParent()->getParent()->rotateLeft();
                $this->fixRoot($pointer);
                $pointer->getParent()->setColor(Color::Black);
                $pointer->sibling()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isRightChild() && $pointer->isLeftChild()) {
                $pointer->getParent()->rotateRight();
                $pointer->getParent()->rotateLeft();
                $this->fixRoot($pointer);
                $pointer->setColor(Color::Black);
                $pointer->getLeft()->setColor(Color::Red);
                $pointer->getParent()->setColor(Color::Black);
                continue;
            }
            break;
        } while (true);
    }

    private function fixRoot(RedBlackNode $node): void
    {
        $pointer = $node;
        while ($pointer->getParent() != null) {
            $pointer = $pointer->getParent();
        }
        if ($pointer !== $this->root) {
            $this->root = $pointer;
        }
    }
}
