<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\helper\Enum\Color;
use Src\helper\RedBlackNode;
use Src\helper\RedBlackTree;

final class RedBlackTreeTest extends TestCase
{
    public function testInsert(): void
    {
        $tree = new RedBlackTree();

        $tree->insert(10);
        $root = $tree->getRoot();

        $this->assertNotNull($root);
        $this->assertEquals(10, $root->getValue());
        $this->assertEquals(Color::Black, $root->getColor()); // Root must always be black

        $tree->insert(5);
        $left = $root->getLeft();

        $this->assertNotNull($left);
        $this->assertEquals(5, $left->getValue());
        $this->assertEquals(Color::Red, $left->getColor());

        $tree->insert(15);
        $right = $root->getRight();

        $this->assertNotNull($right);
        $this->assertEquals(15, $right->getValue());
        $this->assertEquals(Color::Red, $right->getColor());
    }

    public function testInsertToTheRightTriggersRebalancing(): void
    {
        $tree = new RedBlackTree();

        $tree->insert(10);
        $tree->insert(20);
        $tree->insert(30);

        $root = $tree->getRoot();

        $this->assertEquals(20, $root->getValue());
        $this->assertEquals(Color::Black, $root->getColor());

        $left = $root->getLeft();
        $right = $root->getRight();

        $this->assertEquals(10, $left->getValue());
        $this->assertEquals(Color::Red, $left->getColor());

        $this->assertEquals(30, $right->getValue());
        $this->assertEquals(Color::Red, $right->getColor());
    }

    public function testInsertToTheLeftTriggersRebalancing(): void
    {
        $tree = new RedBlackTree();

        $tree->insert(30);
        $tree->insert(20);
        $tree->insert(10);

        $root = $tree->getRoot();

        $this->assertEquals(20, $root->getValue());
        $this->assertEquals(Color::Black, $root->getColor());

        $left = $root->getLeft();
        $right = $root->getRight();

        $this->assertEquals(10, $left->getValue());
        $this->assertEquals(Color::Red, $left->getColor());

        $this->assertEquals(30, $right->getValue());
        $this->assertEquals(Color::Red, $right->getColor());
    }

    public function testInsertHandlesNegativeValues(): void
    {
        $tree = new RedBlackTree();

        $tree->insert(-10);
        $tree->insert(-20);
        $tree->insert(-5);

        $root = $tree->getRoot();

        $this->assertEquals(-10, $root->getValue());
        $this->assertEquals(-20, $root->getLeft()->getValue());
        $this->assertEquals(-5, $root->getRight()->getValue());
    }

    public function testInsertHandlesLargeNumberOfValues(): void
    {
        $tree = new RedBlackTree();
        $values = range(1, 1000);

        foreach ($values as $value) {
            $tree->insert($value);
        }

        $root = $tree->getRoot();

        $this->assertNotNull($root);
        $this->assertTrue($this->isBalancedRedBlackTree($root));
    }

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
        $redBlackTree = new RedBlackTree($grandparent);
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

        $node->rotateRight($redBlackTree);

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
        $redBlackTree = new RedBlackTree($grandparent);
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

        $node->rotateLeft($redBlackTree);

        $this->assertSame($grandparent->getLeft(), $nodeChildRight);
        $this->assertSame($nodeChildRight->getParent(), $grandparent);

        $this->assertSame($nodeChildRight->getLeft(), $node);
        $this->assertSame($node->getParent(), $nodeChildRight);

        $this->assertSame($node->getRight(), $leftGrandChild);
        $this->assertSame($leftGrandChild->getParent(), $node);

        $this->assertSame($nodeChildRight->getRight(), $rightGrandChild);
        $this->assertSame($rightGrandChild->getParent(), $nodeChildRight);
    }

    private function isBalancedRedBlackTree(?RedBlackNode $node): bool
    {
        if ($node === null) {
            return true;
        }

        $left = $node->getLeft();
        $right = $node->getRight();

        if ($node->getColor() === Color::Red) {
            if ($left) {
                $this->assertEquals(Color::Black, $left->getColor());
            }
            if ($right) {
                $this->assertEquals(Color::Black, $right?->getColor());
            }
        }

        return $this->isBalancedRedBlackTree($left) && $this->isBalancedRedBlackTree($right);
    }
}
