<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 31/03/14
 * Time: 21:58
 */

namespace BDBTest\Entity\PhoneNumber;


use BDB\Core\Traits\HasGUID;
use BDB\Entity\PhoneNumber\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase {

    protected $phoneNumber;

    public function setUp()
    {
        $this->phoneNumber = new PhoneNumber();
    }

    public function testSetup()
    {
        $this->assertTrue($this->phoneNumber instanceof PhoneNumber);
    }

    public function testGetSetExtension()
    {
        $expected = '123';

        $this->assertEmpty($this->phoneNumber->getExtension());
        $this->phoneNumber->setExtension($expected);
        $this->assertEquals($expected, $this->phoneNumber->getExtension());
    }

    public function testGetSetPhoneNumber()
    {
        $expected = '1234567890';

        $this->assertEmpty($this->phoneNumber->getPhoneNumber());
        $this->phoneNumber->setPhoneNumber($expected);
        $this->assertEquals($expected, $this->phoneNumber->getPhoneNumber());
    }

    public function testGetSetType()
    {
        $expected = 'home';

        $this->assertEmpty($this->phoneNumber->getType());
        $this->phoneNumber->setType($expected);
        $this->assertEquals($expected, $this->phoneNumber->getType());
    }

    public function testGetSetIsDefault()
    {
        $expected = true;
        $this->assertFalse($this->phoneNumber->IsDefault());

        $this->phoneNumber->setIsDefault($expected);
        $this->assertEquals($expected, $this->phoneNumber->IsDefault());
    }

    public function testGetSetGUID()
    {
        $expected = HasGUID::generateGUID();
        $this->assertEmpty($this->phoneNumber->getGUID());

        $this->phoneNumber->setGUID($expected);
        $this->assertEquals($expected, $this->phoneNumber->getGUID());
    }

    public function testGetSetStatus()
    {
        $expected = 1;
        $this->assertEmpty($this->phoneNumber->getStatus());

        $this->phoneNumber->setStatus($expected);
        $this->assertEquals($expected, $this->phoneNumber->getStatus());
    }
}
