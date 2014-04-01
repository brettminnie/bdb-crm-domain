<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 01/04/14
 * Time: 12:10
 */

namespace BDBTest\Entity\Person;


use BDB\Entity\Address\Address;
use BDB\Entity\Person\Person;

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

    }
}
