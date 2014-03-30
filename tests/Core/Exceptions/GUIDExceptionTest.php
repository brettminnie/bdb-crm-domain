<?php

class GUIDExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $exception = new \BDB\Core\Exceptions\GUIDException('Test');
        $this->assertTrue($exception instanceof \BDB\Core\Exceptions\GUIDException);
        $this->assertEquals('Test', $exception->getMessage());
        $this->assertEmpty($exception->getCode());
    }
}
