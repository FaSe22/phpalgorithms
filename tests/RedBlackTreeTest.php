<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\helper\Enum\Color;
use Src\helper\RedBlackNode;

final class RedBlackTreeTest extends TestCase
{
    public function testNodeGettersAndSetters(): void
    {
        $parent = new RedBlackNode(10);
        $left = new RedBlackNode(5);
        $right = new RedBlackNode(15);

        $node = new RedBlackNode(20, $parent);
        $node->setLeft($left);
        $node->setRight($right);

        $this->assertEquals(20, $node->getValue());
        $this->assertSame($parent, $node->getParent());
        $this->assertSame($left, $node->getLeft());
        $this->assertSame($right, $node->getRight());

        $node->setColor(Color::Black);
        $this->assertEquals(Color::Black, $node->getColor());

        $node->setParent($left);
        $this->assertSame($left, $node->getParent());
    }


    public function testIsLeftChild(): void
    {
        $parent = new RedBlackNode(10);
        $child = new RedBlackNode(5, $parent);
        $parent->setLeft($child);

        $this->assertTrue($child->isLeftChild());
    }

    public function testIsRightChild(): void
    {
        $parent = new RedBlackNode(10);
        $child = new RedBlackNode(15, $parent);
        $parent->setRight($child);

        $this->assertTrue($child->isRightChild());
    }

    public function testUncle(): void
    {
        $grandparent = new RedBlackNode(20);
        $parent = new RedBlackNode(10, $grandparent);
        $uncle = new RedBlackNode(30, $grandparent);

        $grandparent->setLeft($parent);
        $grandparent->setRight($uncle);

        $child = new RedBlackNode(5, $parent);
        $parent->setLeft($child);

        $this->assertSame($uncle, $child->uncle());
    }

    public function testSibling(): void
    {
        $parent = new RedBlackNode(20);
        $left = new RedBlackNode(10, $parent);
        $right = new RedBlackNode(30, $parent);
        $parent->setLeft($left);
        $parent->setRight($right);

        $this->assertEquals($right, $left->sibling());
        $this->assertEquals($left, $right->sibling());
    }

    public function testRotateRight(): void
    {
        $grandparent = new RedBlackNode(10);
        $node = new RedBlackNode(5, $grandparent);
        $grandparent->setLeft($node);

        $nodeChildLeft = new RedBlackNode(3, $node);
        $node->setLeft($nodeChildLeft);
        $nodeChildRight = new RedBlackNode(7, $node);
        $node->setRight($nodeChildRight);

        $leftGrandChild = new RedBlackNode(1, $nodeChildLeft);
        $nodeChildLeft->setLeft($leftGrandChild);
        $rightGrandChild = new RedBlackNode(4, $nodeChildLeft);
        $nodeChildLeft->setRight($rightGrandChild);

        $node->rotateRight();

        $this->assertSame($grandparent->getLeft(), $nodeChildLeft);
        $this->assertSame($nodeChildLeft->getParent(), $grandparent);

        $this->assertSame($node->getParent(), $nodeChildLeft);
        $this->assertSame($nodeChildLeft->getRight(), $node);

        $this->assertSame($node->getLeft(), $rightGrandChild);
        $this->assertSame($rightGrandChild->getParent(), $node);

        $this->assertSame($node->getRight(), $nodeChildRight);
        $this->assertSame($nodeChildRight->getParent(), $node);
    }

    public function testRotateLeft(): void
    {
        $grandparent = new RedBlackNode(10);
        $node = new RedBlackNode(5, $grandparent);
        $grandparent->setLeft($node);

        $nodeChildLeft = new RedBlackNode(3, $node);
        $node->setLeft($nodeChildLeft);
        $nodeChildRight = new RedBlackNode(7, $node);
        $node->setRight($nodeChildRight);

        $leftGrandChild = new RedBlackNode(6, $nodeChildRight);
        $nodeChildRight->setLeft($leftGrandChild);
        $rightGrandChild = new RedBlackNode(8, $nodeChildRight);
        $nodeChildRight->setRight($rightGrandChild);

        $node->rotateLeft();

        $this->assertSame($grandparent->getLeft(), $nodeChildRight);
        $this->assertSame($nodeChildRight->getParent(), $grandparent);

        $this->assertSame($nodeChildRight->getLeft(), $node);
        $this->assertSame($node->getParent(), $nodeChildRight);

        $this->assertSame($node->getRight(), $leftGrandChild);
        $this->assertSame($leftGrandChild->getParent(), $node);

        $this->assertSame($nodeChildRight->getRight(), $rightGrandChild);
        $this->assertSame($rightGrandChild->getParent(), $nodeChildRight);
    }
}
