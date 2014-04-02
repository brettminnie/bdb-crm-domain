<?php
/**
 * Created by PhpStorm.
 * User: brettm
 * Date: 02/04/14
 * Time: 21:55
 */

namespace BDBTest\Core\Traits;

use BDB\Core\Interfaces\Contact;
use BDB\Core\Traits\HasContact;

class HasContactStub implements Contact {
    use HasContact;
}

class HasContactTest extends \PHPUnit_Framework_TestCase {
    protected $trait;

    public function setUp()
    {
        $this->trait = new HasContactStub();
    }

    public function testGetSetIsPrimary()
    {
        $expected = true;

        $this->assertFalse($this->trait->isPrimary());
        $this->trait->setIsPrimary($expected);
        $this->assertEquals($expected, $this->trait->isPrimary());
    }

    public function testGetSetContactType()
    {
        $expected = 'billing';

        $this->assertEmpty($this->trait->getContactType());
        $this->trait->setContactType($expected);
        $this->assertEquals($expected, $this->trait->getContactType());
    }
}
