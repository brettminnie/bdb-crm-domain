<?php

namespace BDBTest\Core\Traits;


use BDB\Core\Exceptions\GUIDException;
use BDB\Core\Traits\HasGUID;

class HasGUIDImplementation
{
    use HasGUID;
}

class HasGUIDTest extends \PHPUnit_Framework_TestCase
{
    protected $trait;

    public function setUp()
    {
        $this->trait = new HasGUIDImplementation();
    }

    public function testSetup()
    {
        $this->assertTrue($this->trait instanceof HasGUIDImplementation);
    }

    public function testGetSetGUIDFails()
    {
        $invalidGUID = 'saddsasa';

        try {
            $this->assertNull($this->trait->getGuid());
            $this->trait->setGuid($invalidGUID);
        }
        catch(\Exception $e) {
            $this->assertTrue($e instanceof GUIDException);
        }
    }

    public function testGenerateGUID()
    {
        $invalidGUID = 'saddas';
        $this->assertFalse(HasGUID::validateGuid($invalidGUID));
        $this->assertNull($this->trait->getGuid());

        $validGUID = HasGUID::generateGUID();
        $this->assertTrue(HasGUID::validateGuid($validGUID));
    }

    public function testSetValidGUID()
    {
        $this->assertNull($this->trait->getGuid());

        $validGUID = HasGUID::generateGUID();
        $this->assertTrue(HasGUID::validateGuid($validGUID));

        $this->trait->setGuid($validGUID);

        $this->assertEquals($validGUID, $this->trait->getGuid());
    }

}
