<?php
//memanggil file functions.php
require 'functions.php';

//memanggil function query pengambilan data pada table mahasiswa
//lalu ditampung kedalam variable mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan </title>

    <style>
        #karyawan{
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #aaaa;
            padding: 8px;
            background-color : black;
            color: white;
        }
    </style>
</head>


<body>
    <h1>Daftar karyawan</h1>

    <a href="tambah.php">Tambah Karyawan</a>
    <br>
    <table id = "karyawan" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>
                #
            </th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php foreach ($mahasiswa as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><?= $item["nama"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["gender"] ?></td>
                <td><?= $item["position"] ?></td>
                <td><?= $item["status"] ?></td>
                <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>