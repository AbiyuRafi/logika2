<?php

$jam = 0;
$detik = 0;

if (isset($_POST['submit'])) {
    $jam = $_POST['jam'];

    if (is_numeric($jam)) {
        $detik = $jam * 3600;
    } else {
        $detik = "kaga valid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam ke Detik</title>
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
    if (isset($_POST['submit'])) {
        echo "<p>Total detik dari $jam jam adalah $detik detik.</p>";
    }
    ?>
</body>
</html>
