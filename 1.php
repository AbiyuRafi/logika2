<?php
$luas = 0;

if (isset($_POST['submit'])) {
    $lebar = $_POST['lebar'];
    $panjang = $_POST['panjang'];

    if (is_numeric($lebar) && is_numeric($panjang)) {
        $luas = $lebar * $panjang;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Lebar</td>
                <td><input type="text" name="lebar" id="lebar" value="<?php echo $_POST['lebar'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td>Panjang</td>
                <td><input type="text" name="panjang" id="panjang" value="<?php echo $_POST['panjang'] ?? ''; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung Luas"></td>
            </tr>
        </table>
    </form>

    <?php if ($luas > 0) : ?>
        <p>Luas = <?php echo $luas; ?></p>
    <?php endif; ?>
</body>

</html>