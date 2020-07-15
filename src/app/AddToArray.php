<?php namespace App\Play;

class AddToArray{
    protected $arr;

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
        $inserted1 = ['Handuk'];
        $inserted2 = ['Celana'];
        array_splice( $ori, 0, 0, $inserted1 );
        array_splice( $ori, 6, 0, $inserted2);
        $this->setArr($ori);
    }


}