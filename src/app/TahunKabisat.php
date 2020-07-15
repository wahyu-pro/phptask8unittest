<?php
namespace App\Play;

class TahunKabisat{

    protected $tahun;

    public function getTahun()
    {
        return $this->tahun;
    }

    public function setTahun($tahun)
    {
        return $this->tahun = $tahun;
    }

    public function getTahunKabisat()
    {
        if ($this->tahun % 4 == 0) {
            if ($this->tahun % 100 == 0) {
                if ($this->tahun % 400 == 0) {
                    return "Tahun $this->tahun adalah tahun kabisat";
                }else{
                    return "Tahun $this->tahun bukan tahun kabisat";
                }
            }else{
                return "Tahun $this->tahun adalah tahun kabisat";
            }
        }else{
            return "Tahun $this->tahun bukan tahun kabisat";
        }
    }
}

// $apa = new TahunKabisat();
// echo $apa->getTahunKabisat();

?>
