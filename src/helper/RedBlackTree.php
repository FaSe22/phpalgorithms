<?php

namespace Src\helper;

use Src\helper\Enum\Color;
use Src\helper\Enum\Direction;

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
            if ($pointer->getParent()->isChild(Direction::Left) && $pointer->isChild(Direction::Left)) {
                $pointer->getParent()->getParent()->rotate($this, Direction::Right);
                $pointer->getParent()->setColor(Color::Black);
                $pointer->sibling()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isChild(Direction::Left) && $pointer->isChild(Direction::Right)) {
                $pointer->getParent()->rotate($this, Direction::Left);
                $pointer->getParent()->rotate($this, Direction::Right);
                $pointer->setColor(Color::Black);
                $pointer->getRight()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isChild(Direction::Right) && $pointer->isChild(Direction::Right)) {
                $pointer->getParent()->getParent()->rotate($this, Direction::Left);
                $pointer->getParent()->setColor(Color::Black);
                $pointer->sibling()->setColor(Color::Red);
                continue;
            }
            if ($pointer->getParent()->isChild(Direction::Right) && $pointer->isChild(Direction::Left)) {
                $pointer->getParent()->rotate($this, Direction::Right);
                $pointer->getParent()->rotate($this, Direction::Left);
                $pointer->setColor(Color::Black);
                $pointer->getLeft()->setColor(Color::Red);
                $pointer->getParent()->setColor(Color::Black);
                continue;
            }
            break;
        } while ($pointer);
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
        $node = new RedBlackNode($value);
        do {
            if ($value < $pointer->getValue()) {
                if ($pointer->getLeft() == null) {
                    $pointer->setLeft($node);
                    return $node;
                }
                $pointer = $pointer->getLeft();
            } else {
                if ($pointer->getRight() == null) {
                    $pointer->setRight($node);
                    return $node;
                }
                $pointer = $pointer->getRight();
            }
        } while (true);
    }
}
