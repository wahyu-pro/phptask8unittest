<?php namespace App\Play;

class AddToArray{
    protected $arr;

    public function __construct()
    {
        $this->addToArray();
    }

    public function getArr()
    {
        return $this->arr;
    }

    public function setArr($arr)
    {
        return $this->arr = $arr;
    }

    public function addToArray()
    {
        $ori = ['Meja', 'Buku', 'Topi', 'Baju', 'Kayu'];
        $inserted = ['Handuk'];
        array_splice( $ori, 0, 0, $inserted );
        $this->setArr($ori);
    }


}