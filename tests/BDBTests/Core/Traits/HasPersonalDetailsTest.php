<?php

namespace BDBTest\Core\Traits;

use BDB\Core\Traits\HasPersonalDetails;

class HasPersonalDetailsStub{
    use HasPersonalDetails;
}

class HasPersonalDetailsTest extends \PHPUnit_Framework_TestCase
{

    protected $trait;

    public function setUp()
    {
        $this->trait = new HasPersonalDetailsStub();
    }

    public function testSetUp()
    {
        $this->assertEmpty($this->trait->getFullName());
    }


    public function testGetFullName()
    {
        $title      = 'Mr';
        $forename   = 'Test';
        $middleName = 'Person';
        $surname    = 'Thing';

        $fullname = sprintf('%s %s %s %s', $title, $forename,$middleName, $surname);

        $this->trait
            ->setTitle($title)
            ->setForenames($forename)
            ->setMiddleNames($middleName)
            ->setSurname($surname);

        $this->assertEquals($title, $this->trait->getTitle());
        $this->assertEquals($forename, $this->trait->getForenames());
        $this->assertEquals($middleName, $this->trait->getMiddleNames());
        $this->assertEquals($surname, $this->trait->getSurname());
        $this->assertEquals($fullname, $this->trait->getFullName());
    }
}
