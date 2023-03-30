<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian ': $gapok = 7000000; break;
            case 'Staff ': $gapok = 5000000; break;
            default: $gapok = 0;
        }
        return $gapok;
    }

    public function setTunjab($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $tunjab = 15000000 * 0.2; break;
            case 'Asisten Manager': $tunjab= 10000000 * 0.2; break;
            case 'Kepala Bagian ': $tunjab = 7000000 * 0.2; break;
            case 'Staff ': $tunjab = 5000000 * 0.2; break;
            default: $tunjab = 0;
        }
        return $tunjab;
    }

    public function setTunkel($jabatan){
        switch($jabatan){
            case 'Manager': $tunkel = ($this->status == 'Menikah' && $this->setGajiPokok($jabatan) >= 15000000) ? 0.1 * $this->setGajiPokok($jabatan) : 0; break;
            case 'Asisten Manager':  $tunkel = ($this->status == 'Menikah' && $this->setGajiPokok($jabatan) >= 10000000) ? 0.1 * $this->setGajiPokok($jabatan) : 0; break;
            case 'Kepala Bagian ':  $tunkel =  ($this->status == 'Menikah' && $this->setGajiPokok($jabatan) >= 7000000) ? 0.1 * $this->setGajiPokok($jabatan) : 0; break;
            case 'Staff ':  $tunkel = ($this->status == 'Menikah' && $this->setGajiPokok($jabatan) >= 5000000) ? 0.1 * $this->setGajiPokok($jabatan) : 0; break;
            default: $tunkel = 0;
        }
        return $tunkel;
    }

    public function setGajiKotor(){
        $gapok = $this->setGajiPokok($this->jabatan);
        $tunjab = $this->setTunjab($this->jabatan);
        $tunkel = $this->setTunkel($this->jabatan);
        $gakor = $gapok + $tunjab + $tunkel;
        return $gakor;
    }

    public function setZakatProfesi($jabatan){
        $gakor = $this->setGajiKotor();
        $zakat = ($this->agama == 'Islam' && $gakor >= 6000000)? 0.025 * $gakor : 0;
    return $zakat;
    }

    public function setGajiBersih(){
        $gapok = $this->setGajiPokok($this->jabatan);
        $tunjab = $this->setTunjab($this->jabatan);
        $tunkel = $this->setTunkel($this->jabatan);
        $zakat = $this->setZakatProfesi($this->jabatan);
        $gaber = $gapok + $tunjab + $tunkel - $zakat;
        return $gaber;
    }


    public function cetak(){
        echo 'NIP Pegawai : '.$this->nip;
        echo '<br>Nama Pegawai : '.$this->nama;
        echo '<br>Jabatan : '. $this->jabatan;
        echo '<br>Agama : '.$this->agama;
        echo '<br>Status : '.$this->status;
        echo '<br>Gaji Pokok : Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan : Rp.'.number_format($this->setTunjab($this->jabatan),0,',','.');
        echo '<br>Tunjangan Keluarga : Rp.'.number_format($this->setTunkel($this->jabatan),0,',','.');
        echo '<br>Gaji Kotor : Rp.'.number_format($this->setGajiKotor($this->jabatan),0,',','.');
        echo '<br>Zakat Profesi : Rp.'.number_format($this->setZakatProfesi($this->jabatan),0,',','.');
        echo '<br>Gaji Bersih : Rp.'.number_format($this->setGajiBersih($this->jabatan),0,',','.');
        echo '<hr>';

    }

}



?>