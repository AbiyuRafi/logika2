<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    .but {
        float: right;
        margin-right: 20px;
        text-decoration: none;
        background-color: #dee2e6;
        color: #000;
        border-radius: 50px;
        margin-bottom: 20px;
        padding: 10px 20px;
        margin-top: 10px;
    }

    .but:hover {
        background: #ced4da;
    }

    .container {
        clear: both;
        margin-bottom: 20px;
    }

    .text h2 {
        margin-left: 15px;
    }

    .text ul li {
        font-size: 17px;
        margin: 10px;
        list-style-type: none;
    }

    .img {
        float: right;
        clear: both;
        margin-right: 20px;
        width: 45%;
    }

    img {
        width: 100%;
        margin-bottom: 50px;
    }

    .baris {
        display: inline-flex;
        justify-content: center;
        padding: 20px;
        margin-left: -20px;
    }

    .col {
        margin: 400px 100px;
        margin-bottom: 100px;
        width: 309px;
        max-width: 100%;
        height: 120px;
        background-color: #9d0208;
        margin: 3px;
        color: #eee;
        font-size: 20px;
        box-sizing: border-box;
        padding: 10px;
        float: left;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    input[type] {
        margin-top: 12px;
        margin-bottom: 10px;
        width: 500px;
        height: 25px;
    }
    textarea{
        margin-top: 12px;
        margin-bottom: 10px;
    }

    form {
        margin-left: 40px;
        background-color: #dee2e6;
        width: 500px;
        padding: 30px;
    }

    button {
        float: right;
    }

    .kotak {
        float: right;
        width: 600px;
        height: 200px;
        margin-right: 10px;
        border: 2px solid black;
    }
</style>

<body>
    <a class="but" href="#">Administrator</a>

    <div class="container">
        <div class="text">
            <img class="img" src="img/pl.jpg">
            <h2>Pengaduan Masyarakat</h2>
            <ul>
                <li>
                    1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor eveniet enim sit nihil.
                </li>
                <li>
                    2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, excepturi? Sint omnis voluptates facere nostrum!
                </li>
                <li>
                    3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique hic in sunt.
                </li>
                <li>
                    4. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
            </ul>
            <section class="baris">
                <div class="col">Jumlah Kecamatan<br>15</div>
                <div class="col">Jumlah Desa <br>42</div>
                <div class="col">Jumlah Penduduk <br>12.000</div>
                <div class="col">Data per Tahun <br>2023</div>
            </section>
        </div>
        <div class="form">
            <h1>
                <center>Laporan Pengaduan</center>
            </h1>
            <div class="kotak">

            </div>
            <form action="" method="post">
                <label for="nik"><b> NIK :</b></label><br>
                <input type="text" name="nik" value=""><br>

                <label for="nama"><b>Nama Lengkap :</b></label><br>
                <input type="text" name="nama" value=""><br>

                <label for="notelp"><b>No Telp :</b></label><br>
                <input type="number" name="tlp"><br>

                <label for="pengaduan"><b>Pengaduan :</b></label><br>
                <textarea name="" id="" cols="66" rows="10"></textarea><br>

                <label for="gambar"><b>Upload Gambar Tekait :</b></label><br>
                <input type="file" name="gambar" id=""><br>
                <button type="submit">Kirim Data</button>
            </form>

        </div>
        <footer class="footer">
            <p>&copy; 2023 Nama Anda. All rights reserved.</p>
        </footer>

    </div>
</body>

</html>