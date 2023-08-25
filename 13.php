<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <title>Document</title>
    <style>
        body {
            background-color: rgb(120, 203, 214);
            font-family: "Poppins";
        }

        span {
            color: rgb(255, 255, 255);
        }

        .button {
            float: right;
            background-color: orange;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 50px;
            margin-bottom: 10px;
        }

        .content {
            clear: right;
            margin-bottom: 100px;
        }

        .text {
            float: left;
            width: 50%;
            margin-bottom: 12rem;
        }

        .image {
            width: 50%;
            float: right;
        }

        img {
            width: 100%;
            border-radius: 10px;
        }

        .baris {
            display: inline-flex;
            justify-content: center;
            padding: 20px;
            margin-left: -20px;
        }

        .kolom {
            margin: 200px 100px;
            width: 300px;
            max-width: 500%;
            height: 120px;
            background-color: orange;
            margin: 3px;
            box-sizing: border-box;
            padding: 10px;
            float: left;
            text-align: center;
        }

        input[type] {
            width: 400px;
            border-radius: 20px;
        }

        form {
            background-color: antiquewhite;
            width: 500px;
            padding: 20px;
            border-radius: 20px;
        }

        iframe {
            margin-left: 600px;
            margin-top: -900px;
        }
    </style>
</head>

<body>
    <a href="#" class="button">Administrasi</a>
    <div class="content">
        <div class="text">
            <h1>Tes <span>Tes </span>Doang</h1>
            <ul>
                <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nesciunt cupiditate autem sint saepe reprehenderit totam porro, accusantium soluta voluptate distinctio. Itaque magni ipsum, reprehenderit nemo non accusamus
                    laudantium incidunt.
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laboriosam exercitationem tempora vero, necessitatibus illum rem nostrum. Quibusdam aspernatur nam eligendi voluptates voluptatibus sed quaerat. Doloremque minima
                    sequi corporis voluptates.
                </li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aut officiis ratione veritatis optio quasi asperiores maxime. Tempora obcaecati enim nam nisi, tenetur, iure culpa atque quisquam voluptatibus iusto quos!</li>
            </ul>
        </div>
        <div class="image">
            <img src="Danau-Toba-edited.webp" alt="" />
        </div>
    </div>
    <br />
    <section class="baris">
        <div class="kolom">Jumlah Kecamatan<br />15</div>
        <div class="kolom">Jumlah Desa<br />42</div>
        <div class="kolom">Jumlah Penduduk<br />12.000</div>
        <div class="kolom">Data Per Tahun<br />2023</div>
    </section>
    <footer class="footer">
        <h1>
            <center>Laporan Pengaduan</center>
        </h1>
        <form action="" method="post">
            <center><b>BUAT PENGADUAN</b><br /></center>
            <label for="nik">NIK :</label>
            <br />
            <input type="number" name="nik" id="nik" />
            <br />
            <label for="nama">Nama Lengkap</label>
            <br />
            <input type="text" name="nama" id="nama" />
            <br />
            <label for="notelp" name="notelp" id="notelp">No Telepon</label>
            <br />
            <input type="number" name="notelp" id="notelp" />
            <br />
            <label for="pengaduan" name="pengaduan" id="pengaduan">Pengaduan</label>
            <br />
            <input type="text" name="pengaduan" id="pengaduan" style="height: 300px" />
            <br /><br />
            <label for="gambar" name="gambar" id="gambar">Upload Gambar Terkait</label>
            <br />
            <input type="file" name="gambar" id="gambar" />
            <br />
            <br />
            <!-- Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.013923051399!2d106.84130407408345!3d-6.645191993349399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sWikrama%20Bogor%20Vocational%20School!5e0!3m2!1sen!2sid!4v1692864386543!5m2!1sen!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <button class="button" type="submit" style="margin-right: 270px">Kirim</button>

            <br /><br />
        </form>
    </footer>
</body>

</html>