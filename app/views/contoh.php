<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>daftar mahasiswa</h1>
    <ul>
        <?php foreach ($data['mhs'] as $mhs) : ?>
            <ul>
                <li><?= $mhs['nama']; ?></li>
                <li><?= $mhs['nim']; ?></li>
                <li><?= $mhs['prodi']; ?></li>
                <li><?= $mhs['fakultas']; ?></li>
            </ul>
        <?php endforeach; ?>
    </ul>
</body>

</html>