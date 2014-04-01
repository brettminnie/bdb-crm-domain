<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 01/04/14
 * Time: 12:10
 */

namespace BDBTest\Entity\Person;


use BDB\Entity\Address\Address;
use BDB\Entity\EmailAddress\EmailAddress;
use BDB\Entity\Person\Person;
use BDB\Entity\PhoneNumber\PhoneNumber;
use Doctrine\Common\Collections\ArrayCollection;

class PersonTest extends \PHPUnit_Framework_TestCase {

    protected $person;

    public function setUp()
    {
        $this->person = new Person();
    }

    public function testSetUp()
    {
        $this->assertTrue($this->person instanceof Person);
    }

    public function testGetSetAddresses()
    {
        $expectedAddress = new Address();
        $expectedArrayCollection = new ArrayCollection();
        $expectedAddress->setAddressLines(array('foo', 'bar'));
        $expectedArrayCollection->add($expectedAddress);

        $this->person->addAddress($expectedAddress);
        $this->assertEquals($expectedAddress, $this->person->getAddresses()->toArray()[0]);
        $this->person->setAddresses($expectedArrayCollection);
        $this->assertEquals($expectedArrayCollection, $this->person->getAddresses());

        $this->person->clearAddresses();
        $this->assertEmpty($this->person->getAddresses()->toArray());
    }

    public function testGetSetEmailAddresses()
    {
        $expectedAddress = new EmailAddress();
        $expectedArrayCollection = new ArrayCollection();
        $expectedAddress->setEmailAddress('foo@bar.baz');
        $expectedArrayCollection->add($expectedAddress);

        $this->person->addEmailAddress($expectedAddress);
        $this->assertEquals($expectedAddress, $this->person->getEmailAddresses()->toArray()[0]);
        $this->person->setEmailAddresses($expectedArrayCollection);
        $this->assertEquals($expectedArrayCollection, $this->person->getEmailAddresses());

        $this->person->clearEmailAddresses();
        $this->assertEmpty($this->person->getEmailAddresses()->toArray());
    }

    public function testGetSetPhoneNumbers()
    {
        $expectedPhoneNumber = new PhoneNumber();
        $expectedArrayCollection = new ArrayCollection();
        $expectedPhoneNumber->setPhoneNumber('123456789');
        $expectedArrayCollection->add($expectedPhoneNumber);

        $this->person->addPhoneNumber($expectedPhoneNumber);
        $this->assertEquals($expectedPhoneNumber, $this->person->getPhoneNumbers()->toArray()[0]);
        $this->person->setPhoneNumbers($expectedArrayCollection);
        $this->assertEquals($expectedArrayCollection, $this->person->getPhoneNumbers());

        $this->person->clearPhoneNumbers();
        $this->assertEmpty($this->person->getPhoneNumbers()->toArray());
    }
}
