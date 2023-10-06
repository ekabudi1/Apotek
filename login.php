<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
    body {
        background-color: black;
        color: white;
    }

    form tr td input {
        /* height: 100px;
        width: 300px; */
    }
    </style>
</head>

<body>
    <center>
        <h1>
            <b>
                LOGIN PAGE!
            </b>
        </h1>
        <form action="proses_login.php" method="post">
            <table>
                <tr>
                    <td>
                        <h3>Username</h3>
                    </td>
                    <td>
                        <input type="text" name="username" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Password</h3>
                    </td>
                    <td>
                        <input type="password" name="password" id="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>