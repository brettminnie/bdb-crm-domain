<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 01/04/14
 * Time: 12:10
 */

namespace BDBTest\Entity\Person;


use BDB\Entity\Person\Person;

class Test extends \PHPUnit_Framework_TestCase {

    protected $person;

    public function setUp()
    {
        $this->person = new Person();
    }

    public function testSetUp()
    {
        $this->assertTrue($this->person instanceof Person);
    }

    
}
