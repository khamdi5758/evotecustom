<!DOCTYPE html>
<html>

<head>
    <title>Login panitia</title>
    <style>
        body {
            font-family: sans-serif;
            background: #7ea9ad;
        }

        .tulisan_login {
            text-align: center;
            /*membuat semua huruf menjadi kapital*/
            text-transform: uppercase;
        }

        .kotak_login {
            width: 350px;
            background: white;
            /*meletakkan form ke tengah*/
            margin: 80px auto;
            padding: 30px 20px;
        }

        label {
            font-size: 11pt;
        }

        .form_login {
            /*membuat lebar form penuh*/
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
        }

        .tombol_login {
            background: #46de4b;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }

        .link {
            color: white;
            text-decoration: none;
            font-size: 13pt;
        }
    </style>
    <!-- <link rel="stylesheet" href="/assets2/login1.css"> -->
</head>

<body>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Masuk</p>

        <form action="<?= baseurl; ?>/auth/prosloginpanitia" method="post">
            <label>Nama pengguna</label>
            <input type="text" name="username" class="form_login" placeholder="masukkan nama pengguna">

            <label>Kata sandi</label>
            <input type="password" name="password" class="form_login" placeholder="masukkan kata sandi">

            <button type="submit" class="tombol_login"><a class="link" href="#">Masuk</a></button>

            <br />
        </form>
        <p>
        kembali login pemilih klik <a href="<?= baseurl; ?>/auth">disini</a>,untuk login kandidat klik <a href="<?= baseurl; ?>/auth/loginkandidat">disini</a>, kembali ke home klik <a href="<?= baseurl; ?>">disini</a>
        </p>
    </div>
</body>

</html>