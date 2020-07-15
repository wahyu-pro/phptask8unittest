<?php

use PHPUnit\Framework\TestCase;
use App\Play\AddToArray;

class AddToArrayTest extends TestCase{

    // public $result;

    // public function __construct()
    // {
    //     $this->result = new AddToArray();
    // }

    public function testClassHasAttributeArr(){
        $attr = "arr";
        $this->assertClassHasAttribute($attr, AddToArray::class);
    }

    public function testEqualResult()
    {
        $result = new AddToArray();
        $this->assertEquals('Handuk', $result->getArr()[0]);
    }

    public function testPropertyIsArray()
    {
        $result = new AddToArray();
        $this->assertIsArray($result->getArr());
    }



}