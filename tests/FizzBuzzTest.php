<?php

use PHPUnit\Framework\TestCase;
use App\Play\FizzBuzz;

class FizzBuzzTest extends TestCase{

    public function testClassHasAttributeFizzBuzz(){
        $attr = "fizzbuzz";
        $this->assertClassHasAttribute($attr, FizzBuzz::class);
    }

    public function testAttributeIsArray()
    {
        $result = new FizzBuzz();
        $this->assertIsArray($result->getFizzBuzz());
    }

    public function testSumElementAttribute()
    {
        $result = new FizzBuzz();
        $this->assertEquals(50, count($result->getFizzBuzz()));
    }

    public function testCheckElement3Fizz()
    {
        $result = new FizzBuzz();
        $this->assertEquals('3 Fizz', $result->getFizzBuzz()[2]);
    }

    public function testCheckElement5Buzz()
    {
        $result = new FizzBuzz();
        $this->assertEquals('5 Buzz', $result->getFizzBuzz()[4]);
    }

    public function testCheckElement15FizzBuzz()
    {
        $result = new FizzBuzz();
        $this->assertEquals('15 FizzBuzz', $result->getFizzBuzz()[14]);
    }

}