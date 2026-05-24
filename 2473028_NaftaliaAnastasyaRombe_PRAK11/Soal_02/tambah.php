<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>

        <style>
            body{
                font-family: Arial;
                background: #f5f5f5;
            }

            .container{
                width: 500px;
                background: white;
                margin: 30px auto;
                padding: 20px;
                border-radius: 5px;
            }

            input{
                width: 100%;
                height: 35px;
                margin-top: 5px;
                margin-bottom: 15px;
            }

            .simpan{
                background: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
            }

            .kembali{
                background: #2196F3;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;

            }
        </style>
    </head>

    <body>
        <div class="container">

        <h2>Tambah Data Siswa</h2>

        <form action="proses_tambah.php" method="POST">

            Nama :
            <br>

            <input type="text" name="nama">

            Kelas :
            <br>

            <input type="text" name="kelas">

            <button class="simpan" type="submit">
                Simpan
            </button>

            <br><br>

            <a class="kembali" href="index.php">
                Kembali
            </a>

        </form>

        </div>
    </body>
</html>
