<?php
namespace App\Play;

class FilmRating{

    protected $age;

    // public function __construct()
    // {
    //     $this->filmRating();
    // }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        return $this->age = $age;
    }

    public function filmRating()
    {
        // $this->setAge(19);

        if ($this->age >= 21) {
            return "Dewasa";
        }elseif ($this->age >= 13) {
            return "Remaja";
        }elseif ($this->age >= 9) {
            return "Bimbingan Orang Tua";
        }elseif ($this->age < 9) {
            return "Semua Usia";
        }
    }

}