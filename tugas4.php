<?php
$ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "ILKOM" => "Ilmu Komputer", "TE" => "Teknik Elektro"];

$ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "MySQL" => 30, "Phyton" => 30];
$totalSkor = 0;
?>
<fieldset style="background-color:pink;">
    <legend>Form Registrasi Kelompok Belajar</legend>
    <table>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM : </td>
                    <td>
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki">L &nbsp;
                        <input type="radio" name="jk" value="Laki-laki">P
                    </td>
                </tr>
                <tr>
                    <td>Program Studi: </td>
                    <td>
                        <select name="prodi">
                            <?php

                            foreach ($ar_prodi as $prodi => $v) {
                            ?>
                                <option value="<?= $prodi ?>"><?= $v ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill : </td>
                    <td>
                        <?php
                        foreach ($ar_skill as $skill => $s) {
                        ?>
                            <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>

                        <?php } ?>
                    </td>

                    </td>
                </tr>
                <tr>
                    <td>email : </td>
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>
        <tfoot>
            <tr>
                <th colspan="2">
                    <button type="submit" name="proses">Submit</button>
                </th>
            </tr>
        </tfoot>
    </table>


</fieldset>
<?php

if (isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];

    // hitung total skor skill

    foreach ($skill as $s) {
        $totalSkor += $ar_skill[$s]; // accumulate the total score
    }
    if ($totalSkor >= 100 && $totalSkor <= 150) {
        $kategoriSkill = 'Sangat Baik';
    } elseif ($totalSkor >= 60 && $totalSkor <= 100) {
        $kategoriSkill = 'Baik';
    } elseif ($totalSkor >= 40 && $totalSkor <= 60) {
        $kategoriSkill = 'Cukup';
    } elseif ($totalSkor >= 0 && $totalSkor <= 40) {
        $kategoriSkill = 'Kurang';
    } else {
        $kategoriSkill = 'Tidak Memadai';
    }

    $lastSkill = end($skill);
    $skillKategori[$lastSkill] = $kategoriSkill;
}

?>

NIM : <?= $nim ?><br>
Nama : <?= $nama ?><br>
Jenis Kelamin : <?= $jk ?><br>
Program Studi : <?= $prodi ?><br>

Skill :
<?php
foreach ($skill as $s) { ?>
    <?= $s ?>,
<?php } ?><br>

Jumlah Skor Skill : <?= $totalSkor ?><br>

Kategori Skill :
<?php
foreach ($skillKategori as $s => $kategori) { ?>
    <?= $kategori ?>
<?php } ?><br>

Email : <?= $email ?>