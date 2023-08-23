<?php

$nim = "";
$nama = "";
$tugas = 0.25;
$uts = 0.25;
$uas = 0.30;
$kuis = 0.15;
$kehadiran = 0.5;
$nilaiakhir = 0;

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nilai_tugas = $_POST['tugas'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_kuis = $_POST['kuis'];
    $nilai_kehadiran = $_POST['kehadiran'];

    $nilaiakhir = ($kehadiran * $nilai_kehadiran) + ($tugas * $nilai_tugas) + ($kuis * $nilai_kuis) + ($uts * $nilai_uts) + ($uas * $nilai_uas);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>NIM :</td>
                <td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
            </tr>
            <tr>
                <td>Nilai Tugas :</td>
                <td><input type="text" name="tugas" value=""></td>
            </tr>
            <tr>
                <td>Nilai UTS :</td>
                <td><input type="text" name="uts" value=""></td>
            </tr>
            <tr>
                <td>Nilai UAS :</td>
                <td><input type="text" name="uas" value=""></td>
            </tr>
            <tr>
                <td>Nilai Kuis :</td>
                <td><input type="text" name="kuis" value=""></td>
            </tr>
            <tr>
                <td>Kehadiran :</td>
                <td><input type="text" name="kehadiran" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<p>Nilai akhir untuk $nama (NIM: $nim) adalah $nilaiakhir</p>";
    }
    ?>
</body>
</html>
