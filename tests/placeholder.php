<?php
class placeholder extends PHPUnit_Framework_TestCase
{
    // ...

    public function testFail()
    {
        $this->assertEquals(2+2,5);
    }

    public function testPass()
    {
        $this->assertEquals(1,1);
    }

    public function testIgnore() {
    	$this->markTestSkipped('Because I said so');
    }
    // ...
}