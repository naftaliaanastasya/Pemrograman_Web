<?php
include 'koneksi.php';

$data = $conn->query(
"SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Siswa</title>

        <style>
            body{
                font-family: Arial;
                background: #f5f5f5;
            }

            .container{
                width: 700px;
                background: white;
                margin: 30px auto;
                padding: 20px;
            }

            table{
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th, td{
                border: 1px solid #ccc;
                padding: 10px;
                text-align: center;
            }

            h2{
                text-align: center;
            }

            .tambah{
                background: #4CAF50;
                color: white;
                padding: 10px;
                text-decoration: none;
                border-radius: 5px;
            }

            .edit{
                background: #2196F3;
                color: white;
                padding: 5px 10px;
                margin-right: 5px;
                text-decoration: none;
                border-radius: 5px;
            }

            .hapus{
                background: #F44336;
                color: white;
                padding: 5px 10px;
                text-decoration: none;
                border-radius: 5px;
            }
        </style>
    </head>

    <body>
        <div class="container">

        <h2>Data Siswa</h2>

        <a href="tambah.php" class="tambah">
            Tambah Data
        </a>

        <table>

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>

        <?php while($row = mysqli_fetch_array($data)){ ?>

        <tr>

            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['kelas']; ?></td>

            <td>

                <a class="edit"
                href="edit.php?id=<?php echo $row['id']; ?>">
                    Edit
                </a>

                <a class="hapus"
                href="hapus.php?id=<?php echo $row['id']; ?>">
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

        </table>

        </div>
    </body>
</html>