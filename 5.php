<?php

$tahunskrg = 0;
$tahunlahir = 0;
$umur = 0;

if(isset($_POST['submit'])){
    $tahunskrg = $_POST['tahunskrg'];
    $tahunlahir = $_POST['tahunlahir'];

    if (is_numeric($tahunskrg) && is_numeric($tahunlahir)) {
        $umur = $tahunskrg - $tahunlahir;
        $umurt = "Umurnya adalah$umur tahun.";
    } else {
        $umurt = "ga valid.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Umur</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tahun Sekarang :</td>
                <td><input type="text" name="tahunskrg" value=""></td>
            </tr>
            <tr>
                <td>Tahun Lahir :</td>
                <td><input type="text" name="tahunlahir" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<p>$umurt</p>";
    }
    ?>
</body>
</html>
