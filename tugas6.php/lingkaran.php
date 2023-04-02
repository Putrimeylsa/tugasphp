<?php
require_once 'abstrak.php';

class lingkaran extends bentuk2D{
    public $jari2;
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        return "lingkaran";
    }
    public function luasBidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * 3.14 * $this->jari2;
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