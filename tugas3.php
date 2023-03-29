<?php 
// array scalar
$m1 = ['NIM'=>'062030801760', 'nama'=>'Putri', 'nilai'=>90];
$m2 = ['NIM'=>'062030801761', 'nama'=>'Lala', 'nilai'=>70];
$m3 = ['NIM'=>'062030801762', 'nama'=>'Ica', 'nilai'=>50];
$m4 = ['NIM'=>'062030801763', 'nama'=>'Kamilah', 'nilai'=>40];
$m5 = ['NIM'=>'062030801764', 'nama'=>'Utami', 'nilai'=>90];
$m6 = ['NIM'=>'062030801765', 'nama'=>'Lucky', 'nilai'=>75];
$m7 = ['NIM'=>'062030801766', 'nama'=>'Sasunto', 'nilai'=>30];
$m8 = ['NIM'=>'062030801767', 'nama'=>'Bella', 'nilai'=>85];

// array asossiative
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case
*/

// fungsi fungsi sederhana
$jumlah_mahasiswa = count($mahasiswa);
$nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($nilai);
$rata_rata = $total_nilai / $jumlah_mahasiswa;
$nilai_max = max($nilai);
$nilai_min = min($nilai);

// membuat keterangan
$keterangan = [
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Nilai Tertinggi' => $nilai_max,
    'Nilai Terendah' => $nilai_min,
    'Rata-rata Nilai' => $rata_rata
];




?>

<table border="1px" width="100%" bgcolor="pink">
<thead>
    
    <tr>
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>


<tbody>
<?php
$no = 1;
foreach($mahasiswa as $mhs){
$ket = ($mhs['nilai']>=60)? 'Lulus' : 'Tidak Lulus';

// membuat grade dan predikat
switch (true) {
    case ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100):
        $mhs['grade'] = 'A';
        $mhs['predikat'] = 'Sangat Baik';
        break;
    case ($mhs['nilai'] >= 70 && $mhs['nilai'] < 85):
        $mhs['grade'] = 'B';
        $mhs['predikat'] = 'Baik';
        break;
    case ($mhs['nilai'] >= 55 && $mhs['nilai'] < 70):
        $mhs['grade'] = 'C';
        $mhs['predikat'] = 'Cukup';
        break;
    case ($mhs['nilai'] >= 40 && $mhs['nilai'] < 55):
        $mhs['grade'] = 'D';
        $mhs['predikat'] = 'Kurang';
        break;
    default:
        $mhs['grade'] = 'E';
        $mhs['predikat'] = 'Sangat Kurang';
        break;
}
    ?>
 <tr>
        <td><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['nilai']?></td>
        <td><?= $ket ?></td>
        <td><?= $mhs['grade']?></td>
        <td><?= $mhs['predikat']?></td>
</tr>
<?php $no++;}?>
</tbody>
<tfoot>
    <?php
    foreach($keterangan as $ket =>$hasil){
        ?>
        <tr>
            <th colspan="6"><?= $ket ?></th>
            <th><?= $hasil ?></th>
        </tr>
    <?php } ?>
</tfoot>
</table>

