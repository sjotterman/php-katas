<?php 
use Kata\Hello;

class HelloWorldTest extends \Codeception\Test\Unit
{
    public function testHelloWorld()
    {
        $hello = new Hello();
        $this->assertEquals($hello->HelloWorld(), "Hello World");
    }
}
