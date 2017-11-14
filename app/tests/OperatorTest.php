<?php

use PHPUnit\Framework\TestCase;

class OperatorTest extends TestCase {

    public function testAdd() {
        $this->assertEquals(3, Operator::add(2,1));
    }

    public function testSub() {
        $this->assertEquals(5, Operator::sub(10,5));
    }

    public function testMul() {
        $this->assertEquals(15, Operator::mul(3,5));
    }

    public function testDiv() {
        $this->assertEquals(2, Operator::div(10,5));
    }
}