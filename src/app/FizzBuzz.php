<?php

namespace App\Play;

class FizzBuzz
{
    protected $fizzbuzz;

    public function __construct()
    {
        $this->FizzBuzz();
    }

    public function getFizzBuzz()
    {
        return $this->fizzbuzz;
    }

    public function setFizzBuzz($fizzbuzz)
    {
        return $this->fizzbuzz = $fizzbuzz;
    }

    public function FizzBuzz()
    {
        $arr = [];
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 3 == 0 and $i % 5 == 0) {
                array_push($arr, $i . " FizzBuzz");
            } elseif ($i % 3 == 0) {
                array_push($arr, $i . " Fizz");
            } elseif ($i % 5 == 0) {
                array_push($arr, $i . " Buzz");
            } else {
                array_push($arr, $i);
            }
        }
        $this->setFizzBuzz($arr);
    }

    public function result()
    {
        foreach ($this->fizzbuzz as $value) {
            echo $value."\n";
        }
    }
}
