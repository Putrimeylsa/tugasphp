<?php
require_once 'abstrak.php';

class segitiga extends bentuk2D{
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        return "segitiga";
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = "Tidak dapat dihitung jika itu adalah segitiga sembarang";
        return $keliling;
    }
    public function cetak(){
        echo "<table style='background-color: pink; width: 610px; margin-left: 25%; text-align: left;' border='1px' width='100%'>";
        echo "<tr>
                <th>Nama Bidang</th>
                <th>Luas</th>
                <th>Keliling</th>
            </tr>";
        echo "<tr> 
                <td>".$this->namaBidang()." </td>
                <td>".$this->luasBidang()." cm</td>
                <td>".$this->kelilingBidang()." </td>
            </tr>";
        echo "<br>";
    }
}
?>