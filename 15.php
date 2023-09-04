<?php

$n;

if (isset($_POST['submit'])) {
    $n = $_POST["n"];

    if ($n==1) {
        echo "Senin";
    }elseif($n==2){
        echo "Selasa";
    }elseif ($n==3) {
        echo "Rabu";
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
                <td>Inputkan Nilai </td>
                <td>:</td>
                <td><input type="text" name="n"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>