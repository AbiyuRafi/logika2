<?php

$km = 0;
$meter = 0;

if (isset($_POST['submit'])) {
    $km = $_POST['km'];
    
    if (is_numeric($km)) {
        $meter = $km * 1000;
    }
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
                <td>KM</td>
                <td><input type="text" name="km" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            echo "<p>Total Meter dari Km $km adalah $meter</p>";
        }
    ?>
</body>
</html>