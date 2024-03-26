<?php
class Televisi{
    public $merk;
    public $harga;
    public $ukuran;

    public function __construct($merk,$harga,$ukuran){
        $this->merk = $merk;
        $this->harga = $harga;
        $this->ukuran = $ukuran;
    }
    public function getMerk(){
        return $this->merk;
    }
    public function getHarga(){
        return $this->harga;
    }
    public function getUkuran(){
        return $this->ukuran;
    }
    public function ukuranTv(){
        if($this->ukuran <= 32){
            return 'TV Kecil';
        } elseif ($this->ukuran >= 32 && $this->ukuran <= 55){
            return 'TV Sedang';
        } else {
            return 'TV Besar';
        }
    }
    
    public function kualitas(){
        return $this->harga <= 10000000 ? 'Standart' : 'Premium';
    }
}
?>