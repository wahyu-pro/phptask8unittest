<?php

use PHPUnit\Framework\TestCase;
use App\Play\MembalikanKata;

class MembalikanKataTest extends TestCase{

    // public $result;

    // public function __construct()
    // {
    //     $this->result = new MembalikanKata();
    // }

    public function testClassHasAttributeKata(){
        $attr = "kata";
        $this->assertClassHasAttribute($attr, MembalikanKata::class);
    }

    public function testAttributeIsString()
    {
        $result = new MembalikanKata();
        $result->setKata("saya ingin makan nasi goreng");
        $this->assertIsString($result->getKata());
    }

    public function testMatchingResult()
    {
        $result = new MembalikanKata();
        $result->setKata("saya ingin makan nasi goreng");
        $this->assertEquals("goreng nasi makan ingin saya", $result->balikanKata());
    }
}