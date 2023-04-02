<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$lingkaran = new lingkaran(10);
$persegiPanjang = new persegiPanjang(17, 12);
$segitiga = new segitiga(13, 9);

$ar_data = [$lingkaran, $persegiPanjang, $segitiga];

foreach($ar_data as $data){
    $data->cetak();
}
?>