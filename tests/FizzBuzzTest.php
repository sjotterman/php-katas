<?php 
use Kata\FizzBuzz;
class FizzBuzzTest extends \Codeception\Test\Unit
{
    public function testFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $expected = array(1, 2, "fizz", 4, "buzz", "fizz", 7, 8, "fizz", "buzz", 11, "fizz", 13, 14, "fizzbuzz");
        $this->assertEquals($fizzBuzz->getSequence(15), $expected);
    }
}

