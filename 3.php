<?php

$bil1;
$bil2;

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
                <td>Bilangan 1 :</td>
                <td><input type="text" name="bil1" value=""></td>
            </tr>
            <tr>
                <td>Bilangan 2 :</td>
                <td><input type="text" name="bil2" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php

if(isset($_POST['bil1']) && isset($_POST['bil2'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil = $bil1 + $bil2;
    echo "Hasilnya : $hasil";
}