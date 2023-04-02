<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$lingkaran = new lingkaran(25);
$persegiPanjang = new persegiPanjang(19, 15);
$segitiga = new segitiga(18, 9);

$ar_data = [$lingkaran, $persegiPanjang, $segitiga];

foreach($ar_data as $data){
    $data->cetak();
}
?>
