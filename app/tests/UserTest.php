<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testValid() {
        $user = new User();

        $this->assertTrue($user->isValid());
    }
}