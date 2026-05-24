<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin"){

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Berhasil</title>

        <style>
            body{
                font-family: Times New Roman;
                margin: 40px;
            }

            h1{
                font-size: 50px;
            }

            .admin{
                color: blue;
                font-size: 70px;
                font-weight: bold;
            }

            .text{
                font-size: 40px;
                font-weight: bold;
            }

            a{
                color: purple;
                font-size: 35px;
            }
        </style>
    </head>
    
    <body>
        <h1>Login berhasil!</h1>

        <div class="text">
            Selamat datang,
            <span class="admin">admin.</span>
        </div>

        <br>

        <a href="login.php">
            kembali ke halaman login
        </a>
    </body>
</html>
<?php
}else{
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Gagal</title>

        <style>
            body{
                font-family: Times New Roman;
                margin: 40px;
            }

            .gagal{
                color: red;
                font-size: 35px;
                font-weight: bold;
            }

            .username{
                color: black;
            }

            a{
                color: purple;
                font-size: 35px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="gagal">

            Username :
            <span class="username">
                <?php echo $username; ?>
            </span>

            Tidak Terdaftar!

        </div>

        <br>

        <a href="login.php">
            kembali ke halaman login
        </a>

    </body>
</html>
<?php
}
?>