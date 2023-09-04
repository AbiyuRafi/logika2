<?php

$nama = "";
$jamkerja = "";
$upahperjam = 0;
$totalupah = 0;
$golongan = "";

if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
    $golongan = $_POST["gol"];
    $jamkerja = $_POST["kerja"];

    if (($jamkerja - 48) > 0) {
        $totalupah = $totalupah + (($jamkerja - 48) * 4000);
    }

    switch ($golongan) {
        case 'A':
            $upahperjam = 5000;
            break;
        case 'B':
            $upahperjam = 7000;
            break;
        case 'C':
            $upahperjam = 8000;
            break;
        case 'D':
            $upahperjam = 10000;
            break;
        default:
            $upahperjam = 0;
            break;
    }

    $totalupah = $totalupah + ($jamkerja * $upahperjam);
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
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Golongan</td>
                <td>:</td>
                <td><input type="text" name="gol" value="<?php echo $golongan; ?>"></td>
            </tr>
            <tr>
                <td>Jam Kerja</td>
                <td>:</td>
                <td><input type="text" name="kerja" value="<?php echo $jamkerja; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <p>Nama : <?php echo $nama; ?></p>
    <p>Total Upah: <?php echo $totalupah; ?></p>
</body>

</html>