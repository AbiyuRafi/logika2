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
        margin: 0 auto;
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
        width: 50%;
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
        width: 304px;
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

    input[type=text],
    [type=number] {
        margin-top: 12px;
        margin-bottom: 10px;
        width: 500px;
        height: 25px;
    }

    textarea {
        margin-top: 12px;
        margin-bottom: 10px;
    }

    .form h1 {
        margin-top: 90px;
    }

    form {
        position: relative;
        margin-left: 20px;
        margin-top: 10px;
        background-color: #dee2e6;
        width: 500px;
        padding: 40px;
    }

    input[type=submit] {
        float: right;
        background-color: #9d0208;
        color: #fff;
        border-radius: 50px;
        text-decoration: none;
        overflow: hidden;
    }


    .kotak {
        float: right;
        margin-top: 10px;
        width: 600px;
        height: 200px;
        margin-right: 20px;
        border: 2px solid black;
    }

    .kotak b {
        float: right;
        margin-top: 30px;
        margin-right: 20px;
    }

    .kotak .txt {
        margin-left: 20px;
        margin-top: 45px;
    }

    .kotak img {
        margin-left: 410px;
        width: 180px;
        margin-top: -40px;
    }

    footer {
        text-align: center;
        background-color: #9d0208;
        fill: solid;
        margin-top: 50px;
        width: 99%;
        color: #fff;
        padding: 5px;
    }

    iframe {
        margin-left: 640px;
        margin-bottom: -550px;
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
            <div class="if">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.013923051399!2d106.84130407408345!3d-6.645191993349399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sWikrama%20Bogor%20Vocational%20School!5e0!3m2!1sen!2sid!4v1692864386543!5m2!1sen!2sid" width="600" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
            </div>
            <div class="kotak">
                <b>23 Juni 2023 : Abiyu Rafi</b>
                <p class="txt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum sed iste provident!</p>
                <img src="img/berlubang.jpg" alt="">
            </div>
        </div>

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
        <input type="submit" name="submit" value="Kirim Data">
    </form>
    </div>
    <footer>
        <p>Copyright &copy; 2023 Abiyu Rafi</p>
    </footer>

</body>

</html>