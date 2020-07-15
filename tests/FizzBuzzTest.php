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

    public function testJumlahAttribute()
    {
        $result = new FizzBuzz();
        $this->assertEquals(50, count($result->getFizzBuzz()));
    }
}