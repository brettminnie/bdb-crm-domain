<?php

namespace BDBTest\Core\Traits;

use BDB\Core\Traits\HasStatus;

class HasStatusStub {
    use HasStatus;
}

class HasStatusTest extends \PHPUnit_Framework_TestCase {
    protected $trait;

    public function setUp()
    {
        $this->trait = new HasStatusStub();
    }

    public function  testGetSet()
    {
        $expectedStatus  = 0x1;

        $this->assertEmpty($this->trait->getStatus());

        $this->trait->setStatus($expectedStatus);
        $this->assertEquals($expectedStatus, $this->trait->getStatus());
    }
}
