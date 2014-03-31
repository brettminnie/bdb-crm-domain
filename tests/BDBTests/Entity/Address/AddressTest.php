<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 31/03/14
 * Time: 21:37
 */

namespace BDBTest\Entity\Address;


use BDB\Core\Traits\HasGUID;
use BDB\Entity\Address\Address;

class AddressTest extends \PHPUnit_Framework_TestCase {

    protected $address;

    public function setUp()
    {
        $this->address = new Address();
    }

    public function testSetup()
    {
        $this->assertTrue($this->address instanceof Address);
    }

    public function testGetSetAddressLines()
    {
        $expected = ['Foo','Bar','Baz'];

        $this->assertTrue(is_array($this->address->getAddressLines()));
        $this->address->setAddressLines($expected);
        $this->assertEquals($expected, $this->address->getAddressLines());
    }

    public function testGetSetTown()
    {
        $expected = 'town';
        $this->assertEmpty($this->address->getTown());

        $this->address->setTown($expected);
        $this->assertEquals($expected, $this->address->getTown());
    }

    public function testGetSetCounty()
    {
        $expected = 'county';
        $this->assertEmpty($this->address->getCounty());

        $this->address->setCounty($expected);
        $this->assertEquals($expected, $this->address->getCounty());
    }

    public function testGetSetCountry()
    {
        $expected = 'country';
        $this->assertEmpty($this->address->getCountry());

        $this->address->setCountry($expected);
        $this->assertEquals($expected, $this->address->getCountry());
    }

    public function testGetSetPostCode()
    {
        $expected = '12AA BBX';
        $this->assertEmpty($this->address->getPostCode());

        $this->address->setPostCode($expected);
        $this->assertEquals($expected, $this->address->getPostCode());
    }

    public function testGetSetType()
    {
        $expected = 'Home';
        $this->assertEmpty($this->address->getType());

        $this->address->setType($expected);
        $this->assertEquals($expected, $this->address->getType());
    }

    public function testGetSetIsDefault()
    {
        $expected = true;
        $this->assertFalse($this->address->IsDefault());

        $this->address->setIsDefault($expected);
        $this->assertEquals($expected, $this->address->IsDefault());
    }

    public function testGetSetGUID()
    {
        $expected = HasGUID::generateGUID();
        $this->assertEmpty($this->address->getGUID());

        $this->address->setGUID($expected);
        $this->assertEquals($expected, $this->address->getGUID());
    }

    public function testGetSetStatus()
    {
        $expected = 1;
        $this->assertEmpty($this->address->getStatus());

        $this->address->setStatus($expected);
        $this->assertEquals($expected, $this->address->getStatus());
    }
}
