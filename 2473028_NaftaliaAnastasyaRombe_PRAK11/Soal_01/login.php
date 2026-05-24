<!DOCTYPE html>
<html>
    <head>
        <title>2473028-Naftalia Anastasya Rombe</title>
        
        <style>
            body{
                font-family: Times New Roman;
            }

            .login-box{
                width: 500px;
                border: 1px solid gray;
                margin: 20px auto;
            }

            .header{
                background: darkblue;
                color: white;
                text-align: center;
                font-size: 70px;
                padding: 10px;
            }

            .form{
                padding: 10px;
            }

            table{
                width: 100%;
            }

            td{
                padding: 5px;
                font-size: 20px;
            }

            input{
                width: 280px;
                height: 25px;
            }

            button{
                width: 60px;
                height: 30px;
                font-size: 20px;
            }

            .footer{
                border-top: 2px solid gray;
                padding: 10px;
                font-size: 20px;
            }
        </style>
    </head>
    
    <body>
        <div class="login-box">

            <div class="header">
                Login
            </div>

            <div class="form">

                <form action="prosesLogin.php" method="POST">

                    <table>

                        <tr>
                            <td width="40%">Username</td>

                            <td>
                                <input type="text" name="username">
                            </td>
                        </tr>

                        <tr>
                            <td>Password</td>

                            <td>
                                <input type="password" name="password">
                            </td>
                        </tr>

                        <tr>
                            <td></td>

                            <td>
                                <button type="submit">
                                    login
                                </button>
                            </td>
                        </tr>

                    </table>

                </form>

            </div>

            <div class="footer">
                @UKM2014
                <br>
                Name-NRP©
            </div>

        </div>
    </body>
</html>