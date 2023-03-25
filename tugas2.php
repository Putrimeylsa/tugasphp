<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas PHP 2</title>
    </head>
</html>
<body>

    <form action="" method="get">
        <fieldset>
            <legend>Rincian Gaji Pegawai</legend>

            <label for="">Nama</label>
            <br>
            <input type="text" name="nama">
            <br>

            </br>
            <label for="">Jabatan</label>
            <br>
                <select name="jabatan" id="">
                    <option value="" disabled selected>--------pilih-------</option>
                    <option value="Manager">Manager</option>
                    <option value="Asisten">Asisten</option>
                    <option value="Kepala Bagian">Kepada Bagian</option>
                    <option value="Staff">Staff</option>
                </select>
            <br>
            
            </br>
            <label for="">Status</label>
            <br>
                <select name="status" id="">
                <option value="" disabled selected>--------pilih-------</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                </select> 
            <br>
            
            </br>
            <label for="">Agama</label>
            <br>
                <select name="agama" id="">
                <option value="" disabled selected>--------pilih-------</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                </select> 
            <br>

            </br>
            <label for="">Jumlah Anak</label>
            <br>
                <select name="anak" id="">
                <option value="" disabled selected>--------pilih-------</option>
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
            <br>
             
            </br>
            <button name="proses" type="submit">submit</button>
        </fieldset>
    </form>

    <!-- kode php -->
    <?php

    // Mengilangkan wrrning di awal
    error_reporting(0);

    // deklarasi
    $nama = $_GET['nama'];
    $jabatan = $_GET['jabatan'];
    $status = $_GET['status'];
    $agama = $_GET['agama'];
    $anak = $_GET['anak'];    
    $button = $_GET['proses'];
    
    // logika
    // gp = gaji pokok
    switch ($jabatan){
        case "Manager"      :   $gp = 20000000; break;
        case "Asisten"      :   $gp = 15000000; break;
        case "Kepala_Bagian":   $gp = 10000000; break;
        case "Staff"        :   $gp = 4000000; break;
        default             :   $gp = 0;
    }

    // tj = tunjangan jabatan
    $tj = 0.2 * $gp;

    // tk = tunjangan keluarga
    if ($status == 'Menikah' && $anak == '1') $tk = 0.05 * $gp;
    else if ($status == 'Menikah' && $anak == '2') $tk = 0.05 * $gp;
    else if ($status == 'Menikah' && $anak == '3') $tk = 0.1 * $gp;
    else if ($status == 'Menikah' && $anak == '4') $tk = 0.1 * $gp;
    else if ($status == 'Menikah' && $anak == '5') $tk = 0.1 * $gp;
    else $tk = '0';

    // gk = gaji kotor
    $gk = $gp + $tj + $tk;

    // zp = zakat profesi
    if($agama == 'Islam' && $gk >= 6000000){
        $zp = 0.025 * $gk;
    }else{
        $zp = 0;
    }

    // gb = gaji bersih
    $gb = $gk - $zp;

    if(isset($button)){

    ?>
    <hr>
    <fieldset>
        <legend>Total Gaji</legend>

        Nama                         : <?= $nama ?>
        <br> Jabatan                 : <?= $jabatan ?>
        <br> Gaji Pokok              : Rp <?= $gp ?>
        <br> Tunjangan Jabatan       : Rp <?= $tj ?>
        <br> Status                  : <?= $status ?>
        <br> Jumlah Anak             : <?= $anak ?>
        <br> Tunjangan Keluarga      : Rp <?= $tk ?>
        <br> Gaji Kotor              : Rp <?= $gk ?>
        <br> Agama                   : <?= $agama ?>
        <br> Zakat                   : Rp <?= $zp ?>
        <br> Gaji Bersih             : Rp <?= $gb ?>
    </fieldset>
    
    <?php } ?>
    
</body>
</html>