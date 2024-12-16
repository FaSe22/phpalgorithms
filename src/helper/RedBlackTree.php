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

    public function setRoot(RedBlackNode $node): void
    {
        $this->root = $node;
    }

    public function insert(int $value): void
    {
        if ($this->root == null) {
            $this->root = new RedBlackNode($value);
            $this->root->setColor(Color::Black);
            return;
        }
        $pointer = $this->binaryTreeInsert($this->root, $value);
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
                $pointer->getParent()->getParent()->rotateRight($this);
                $pointer->getParent()->setColor(Color::Black);
                $pointer->sibling()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isLeftChild() && $pointer->isRightChild()) {
                $pointer->getParent()->rotateLeft($this);
                $pointer->getParent()->rotateRight($this);
                $pointer->setColor(Color::Black);
                $pointer->getRight()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isRightChild() && $pointer->isRightChild()) {
                $pointer->getParent()->getParent()->rotateLeft($this);
                $pointer->getParent()->setColor(Color::Black);
                $pointer->sibling()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isRightChild() && $pointer->isLeftChild()) {
                $pointer->getParent()->rotateRight($this);
                $pointer->getParent()->rotateLeft($this);
                $pointer->setColor(Color::Black);
                $pointer->getLeft()->setColor(Color::Red);
                $pointer->getParent()->setColor(Color::Black);
                continue;
            }
            break;
        } while (true);
    }

    /**
     * BinaryTree insert of $value starting at $pointer
     *
     * @param RedBlackNode $pointer
     * @param int $value
     * @return RedBlackNode
     */
    public function binaryTreeInsert(RedBlackNode $pointer, int $value): RedBlackNode
    {
        do {
            if ($value < $pointer->getValue()) {
                if ($pointer->getLeft() == null) {
                    $pointer->setLeft(new RedBlackNode($value, $pointer));
                    return $pointer->getLeft();
                }
                $pointer = $pointer->getLeft();
            } else {
                if ($pointer->getRight() == null) {
                    $pointer->setRight(new RedBlackNode($value, $pointer));
                    return $pointer->getRight();
                }
                $pointer = $pointer->getRight();
            }
        } while (true);
    }
}
