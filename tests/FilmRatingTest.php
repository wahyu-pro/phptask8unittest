<?php

use PHPUnit\Framework\TestCase;
use App\Play\FilmRating;

class FilmRatingTest extends TestCase{

    public function testClassHasAttributeAge(){
        $attr = "age";
        $this->assertClassHasAttribute($attr, FilmRating::class);
    }

    public function testAttrIsInt()
    {
        $age = 27;
        $result = new FilmRating();
        $this->assertIsInt($result->setAge($age));
    }

    public function testFilmRate()
    {
        $age = 19;
        $result = new FilmRating();
        $result->setAge($age);
        $this->assertEquals("Remaja", $result->filmRating());
    }

    public function testResultIsString()
    {
        $result = new FilmRating();
        $this->assertIsString($result->filmRating());
    }
}