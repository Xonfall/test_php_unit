<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {

    public function testValid() {
        $user = new User();
        $product = new Product('Bachayani', $user);

        $this->assertTrue($product->isValid());
    }
}