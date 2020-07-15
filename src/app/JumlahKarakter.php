<?php
namespace App\Play;

class JumlahKarakter{

    protected $karakter;

    public function getKarakter()
    {
        return $this->karakter;
    }

    public function setKarakter($karakter)
    {
        return $this->karakter = $karakter;
    }

    public function getJumlahChar()
    {
        $str = count(str_split($this->karakter));
        return $str;
    }
}

?>
