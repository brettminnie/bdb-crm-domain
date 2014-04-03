<?php

namespace BDBTest\Entity\Company;

use BDB\Entity\Address\Address;
use BDB\Entity\Company\Company;
use BDB\Entity\Person\Contact;
use Doctrine\Common\Collections\ArrayCollection;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    protected $company;

    public function setUp()
    {
        $this->company = new Company();
    }

    public function testGetSetName()
    {
        $expected = 'Company Name';

        $this->assertEmpty($this->company->getName());
        $this->company->setName($expected);
        $this->assertEquals($expected, $this->company->getName());
    }

    public function testGetSetRegistrationNumber()
    {
        $expected = '1234/ABC';

        $this->assertEmpty($this->company->getRegistrationNumber());
        $this->company->setRegistrationNumber($expected);
        $this->assertEquals($expected, $this->company->getRegistrationNumber());
    }

    public function testGetSetVatNumber()
    {
        $expected = '1234/ABC';

        $this->assertEmpty($this->company->getVatNumber());
        $this->company->setVatNumber($expected);
        $this->assertEquals($expected, $this->company->getVatNumber());
    }

    public function testGetSetAddress()
    {
        $expected = new Address();
        $expected->setPostCode('123ads');

        $this->assertEmpty($this->company->getAddress());
        $this->company->setAddress($expected);
        $this->assertEquals($expected, $this->company->getAddress());
    }

    public function testGetSetContacts()
    {
        $expected = new Contact();
        $expected->setForenames('foo')->setSurname('bar');

        $this->assertNull($this->company->getContacts());
        $this->company->addContact($expected);

        /** @var ArrayCollection $expectedContacts */
        $expectedContacts = $this->company->getContacts();
        $this->assertTrue($expectedContacts instanceof ArrayCollection);

        $this->company->removeContact($expected);
        $this->assertEmpty($this->company->getContacts()->toArray());

        $this->company->setContacts($expectedContacts);
        $this->assertEquals($expectedContacts, $this->company->getContacts());
    }
}
