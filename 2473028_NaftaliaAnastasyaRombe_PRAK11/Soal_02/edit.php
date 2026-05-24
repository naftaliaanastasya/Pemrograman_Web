<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = $conn->query(
"SELECT * FROM siswa WHERE id='$id'");

$d = $data->fetch_array();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>

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

            .update{
                background: #4CAF50;
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                border-radius: 5px;
                border: none;
                cursor: pointer;
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

        <h2>Edit Data Siswa</h2>

        <form action="proses_edit.php" method="POST">

            <input type="hidden"
            name="id"
            value="<?php echo $d['id']; ?>">

            Nama :
            <br>

            <input type="text"
            name="nama"
            value="<?php echo $d['nama']; ?>">

            Kelas :
            <br>

            <input type="text"
            name="kelas"
            value="<?php echo $d['kelas']; ?>">

            <button class="update" type="submit">
                Update
            </button>

            <br><br>

            <a class="kembali" href="index.php">
                Kembali
            </a>

        </form>

        </div>
    </body>
</html>