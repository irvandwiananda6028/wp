<?php
class Model_latihan1 extends CI_Model
{
    //Membuat Variable untuk menampung nila
    public $nilai1, $nilai2, $hasil;

    //method  penjumlahan
    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
