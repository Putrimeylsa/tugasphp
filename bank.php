<?php
class Bank {
    protected $norek;
    public $nama;
    private $saldo;
    static $jml = 0;
    const BANK = 'Bank Syariah Indonesia';

    public function __construct($no, $nasabah,$saldo){
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }
}
?>