<?php

namespace BDBTest\Core\Abstracts;


class LegalEntityTest extends \PHPUnit_Framework_TestCase
{
    protected $mock;

    public function setUp()
    {
        $this->mock = $this->getMockForAbstractClass('BDB\Core\Abstracts\LegalEntity');
    }

    public function testSetGetName()
    {
        $expected = 'Test Entity';

        $this->assertEmpty($this->mock->getName());

        $this->mock->setName($expected);
        $this->assertEquals($expected, $this->mock->getName());
    }
}
