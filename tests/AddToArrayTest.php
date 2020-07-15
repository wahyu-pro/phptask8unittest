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

    public function testInputIsArray()
    {
        $result = new AddToArray();
        $result->addToArray();
        $this->assertIsArray($result->getArr());
    }

    public function testCheckElementHanduk()
    {
        $result = new AddToArray();
        $result->addToArray();
        $this->assertEquals('Handuk', $result->getArr()[0]);
    }

    public function testCheckElementCelana()
    {
        $result = new AddToArray();
        $result->addToArray();
        $this->assertEquals('Celana', $result->getArr()[6]);
    }

    public function testEqualsResult()
    {
        $result = new AddToArray();
        $result->addToArray();
        $this->assertEquals(['Handuk', 'Meja', 'Buku', 'Topi', 'Baju', 'Kayu', 'Celana'], $result->getArr());
    }

    public function testPropertyIsArray()
    {
        $result = new AddToArray();
        $result->addToArray();
        $this->assertIsArray($result->getArr());
    }



}