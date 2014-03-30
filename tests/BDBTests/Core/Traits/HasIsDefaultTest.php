<?php

namespace BDBTest\Core\Traits;

use BDB\Core\Traits\HasIsDefault;

class HasIsDefaultStub {
    use HasIsDefault;
}

class HasIsDefaultTest extends \PHPUnit_Framework_TestCase
{
    protected $trait;

    public function setUp()
    {
        $this->trait = new HasIsDefaultStub();
    }

    public function testSetup()
    {
        $this->assertFalse($this->trait->isDefault());
    }

    public function testGetSetIsDefault()
    {
        $expected = true;

        $this->trait->setIsDefault($expected);
        $this->assertEquals($expected, $this->trait->getIsDefault());
        $this->assertTrue($this->trait->isDefault());
    }
}
