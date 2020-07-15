<?php
namespace App\Play;

class MembalikanKata{

    protected $kata;

    public function getKata()
    {
        return $this->kata;
    }

    public function setKata($kata)
    {
        return $this->kata = $kata;
    }

    public function balikanKata()
    {
        $balik = explode(" ", $this->kata);
        $balik = array_reverse($balik);
        $balik = join(" ",$balik);
        return $balik;
    }

}
