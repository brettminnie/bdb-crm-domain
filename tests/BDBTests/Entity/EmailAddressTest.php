<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 31/03/14
 * Time: 22:15
 */

namespace BDBTest\Entity;


use BDB\Core\Traits\HasGUID;
use BDB\Entity\EmailAddress\EmailAddress;

class EmailAddressTest extends \PHPUnit_Framework_TestCase {

    protected $emailAddress;

    public function setUp()
    {
        $this->emailAddress = new EmailAddress();
    }

    public function testSetup()
    {
        $this->assertTrue($this->emailAddress instanceof EmailAddress);
    }

    public function testGetSetEmailAddress()
    {
        $expected  = 'test@domain.tld';
        $this->assertEmpty($this->emailAddress->getEmailAddress());

        $this->emailAddress->setEmailAddress($expected);

        $this->assertEquals($expected, $this->emailAddress->getEmailAddress());
    }

    public function testGetSetType()
    {
        $expected = 'home';

        $this->assertEmpty($this->emailAddress->getType());
        $this->emailAddress->setType($expected);
        $this->assertEquals($expected, $this->emailAddress->getType());
    }

    public function testGetSetIsDefault()
    {
        $expected = true;
        $this->assertFalse($this->emailAddress->IsDefault());

        $this->emailAddress->setIsDefault($expected);
        $this->assertEquals($expected, $this->emailAddress->IsDefault());
    }

    public function testGetSetGUID()
    {
        $expected = HasGUID::generateGUID();
        $this->assertEmpty($this->emailAddress->getGUID());

        $this->emailAddress->setGUID($expected);
        $this->assertEquals($expected, $this->emailAddress->getGUID());
    }

    public function testGetSetStatus()
    {
        $expected = 1;
        $this->assertEmpty($this->emailAddress->getStatus());

        $this->emailAddress->setStatus($expected);
        $this->assertEquals($expected, $this->emailAddress->getStatus());
    }

}
