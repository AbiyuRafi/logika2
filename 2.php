<?php

$nama;
$nilai = 0;

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
                <td>Nama</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="text" name="nilai" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    if ($nilai > 70) {
        echo "Nama : $nama <br>";
        echo "Nilai : $nilai <br>";
        echo "Selamat anda lulus";
    } else {
        echo "Nama : $nama <br>";
        echo "Nilai : $nilai <br>";
        echo "ga lulus";
    }
}