<?php

use PHPUnit\Framework\TestCase;
use App\Play\JumlahKarakter;

class JumlahKarakterTest extends TestCase{

    // public $result;

    // public function __construct()
    // {
    //     $this->result = new JumlahKarakter();
    // }

    public function testClassHasAttributeKarakter(){
        $attr = "karakter";
        $this->assertClassHasAttribute($attr, JumlahKarakter::class);
    }

    public function testAttributeIsString()
    {
        $result = new JumlahKarakter();
        $result->setKarakter("Lari Pagi");
        $this->assertIsString($result->getKarakter());
    }

    public function testCountCharacter()
    {
        $result = new JumlahKarakter();
        $sum = $result->getJumlahChar();
        $this->assertIsInt($sum);
    }

    public function testMatchingResult()
    {
        $result = new JumlahKarakter();
        $result->setKarakter("Lari Pagi");
        $this->assertEquals(9, $result->getJumlahChar());
    }
}