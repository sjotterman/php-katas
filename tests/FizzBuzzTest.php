<?php 
use Kata\FizzBuzz;
class FizzBuzzTest extends \Codeception\Test\Unit
{
    public function testFirstFewValues()
    {
        $fizzBuzz = new FizzBuzz();
        $expected = array(1, 2);
        $this->assertEquals($fizzBuzz->getSequence(2), $expected);
    }

    public function testFizz(){
        $fizzBuzz = new FizzBuzz();
        $expected = array(1, 2, "fizz");
        $this->assertEquals($fizzBuzz->getSequence(3), $expected);
    }

    public function testBuzz(){
        $fizzBuzz = new FizzBuzz();
        $expected = array(1, 2, "fizz", 4, "buzz");
        $this->assertEquals($fizzBuzz->getSequence(5), $expected);
    }

    public function testFizzBuzz(){
        $fizzBuzz = new FizzBuzz();
        $expected = array(1, 2, "fizz", 4, "buzz", "fizz", 7, 8, "fizz", "buzz", 11, "fizz", 13, 14, "fizzbuzz");
        $this->assertEquals($fizzBuzz->getSequence(15), $expected);
    }
}

