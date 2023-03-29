<?php
//array scalar
$b1 = ['kode'=>'a1', 'buah'=>'Apel','harga'=>25000, 'jml' => 5];
$b2 = ['kode'=>'a2', 'buah'=>'Anggur','harga'=>45000, 'jml' => 10];
$b3 = ['kode'=>'b1', 'buah'=>'Belimbing','harga'=>15000, 'jml' => 11];
$b4 = ['kode'=>'b2', 'buah'=>'Bengkuang','harga'=>10000, 'jml' => 12];
$b5 = ['kode'=>'c1', 'buah'=>'Cerry','harga'=>45000, 'jml' => 13];

//array asossiative
$buah2an =[$b1,$b2,$b3,$b4,$b5];
$ar_judul = ['No', 'Kode','Buah','harga', 'Jumlah'];

//fungsi-fungsi sederhana
$jumlah_data = count($buah2an);
$jml_kg = array_column($buah2an,'jml');
$total_kg = array_sum($jml_kg);
$harga_total = array_sum($jml_kg);
$max_kg = max($jml_kg);
$min_kg = min($jml_kg);
$keterangan = [
    'Jumlah Data'=>$jumlah_data,
    'Total Kg'=>$total_kg,
    'Jumlah tertingg'=>$max_kg,
    'Jumlah Terendah'=>$min_kg
]
?>
<table border="1" cellpadding="10px" width="100%">
    <thead>
        <tr>
            <?php 
            foreach ($ar_judul as $j){  
            ?>
            <th><?= $j ?></th>

<?php } ?>
</tr>
</thead>
<tbody>

<?php
$no = 1;
foreach ($buah2an as $b){
    $warna = $no % 2 == 1 ? 'blue' : 'yellow';

?>
<tr bgcolor="<?= $warna; ?>">
<td><?= $no ?></td>
<td><?= $b['kode'] ?></td>
<td><?= $b['buah'] ?></td>
<td><?= $b['harga'] ?></td>
<td><?= $b['jml'] ?></td>
</tr>
<?php
$no++;
}
?>
</tbody>
<tfoot>
    <?php
    foreach($keterangan as $ket =>$hasil){
?>
<tr>
    <th colspan="4"><?= $ket ?></th>
    <th><?= $hasil ?></th>

    </tr>
<?php } ?>
</tfoot>
</table>