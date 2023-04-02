<?php
require_once 'abstrak.php';

class persegiPanjang extends bentuk2D{
    public $panjang;
    public $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        return "persegi panjang";
    }
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return $keliling;
    }
    public function cetak(){
        echo "<table style='background-color: aquamarine; width: 610px; margin-left: 25%; text-align: left;' border='1px' width='100%'>";
        echo "<tr>
                <th>Nama Bidang</th>
                <th>Luas</th>
                <th>Keliling</th>
            </tr>";
        echo "<tr> 
                <td>".$this->namaBidang()." </td>
                <td>".$this->luasBidang()." cm</td>
                <td>".$this->kelilingBidang()." cm</td>
            </tr>";
            echo "<br>";
    }
}
?> 