<?php

$jam = 0;
$menit = 0; // Tambahkan titik koma di sini

if (isset($_POST['submit'])) {
    $jam = $_POST['jam'];
    
    if (is_numeric($jam)) {
        $menit = $jam * 60;
    } else {
        $menit = "tidak valid";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam ke Menit</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td><input type="text" name="jam" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) { // Perbaiki POST menjadi $_POST
        echo "<p>Total menit dari jam $jam adalah $menit</p>";
    }
    ?>
</body>
</html>
