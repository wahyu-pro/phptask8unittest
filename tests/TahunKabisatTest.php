<?php

use PHPUnit\Framework\TestCase;
use App\Play\TahunKabisat;

class TahunKabisatTest extends TestCase{

    // public $result;

    // public function __construct()
    // {
    //     $this->result = new TahunKabisat();
    // }

    public function testClassHasAttributeTahun(){
        $attr = "tahun";
        $this->assertClassHasAttribute($attr, TahunKabisat::class);
    }
    public function testResultIsString()
    {
        $result = new TahunKabisat();
        $result->setTahun(1800);
        $this->assertIsString($result->getTahunKabisat());
    }
    public function testAttributeIsInteger(){
        $result = new TahunKabisat();
        $result->setTahun(2000);
        $this->assertIsInt($result->getTahun());
    }

    public function testMatchingResult()
    {
        $result = new TahunKabisat();
        $result->setTahun(2000);
        $this->assertEquals("Tahun ".$result->getTahun()." adalah tahun kabisat", $result->getTahunKabisat());
    }
}