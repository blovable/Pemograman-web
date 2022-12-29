<?php
require 'functions.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {
    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        echo "berhasil";
    } else {
        echo "gagal!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>

    <style>
        input[type=text], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
}



        button[type=submit] {
        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}
        input[type=submit]:hover {
        background-color: #45a049;
}

form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


    </style>

</head>

<body>
    <h1><center>Tambah Karyawan</center></h1>
    <form action="" method="post">
        <ul>
            <ul>
                <label for="nama">Name : </label><br>
                <input type="text" name="nama">
</ul>
            <ul>
                <label for="email">Email : </label><br>
                <input type="text" name="email">
            </ul>
            <ul>
                <label for="address">Address : </label><br>
                <input type="text" name="address">
            </ul>
            <ul>
                <label for="gender">Gender: </label><br>
                <select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            </ul>
            <ul>
                <label for="position">Position : </label><br>
                <input type="text" name="position">
            </ul>
            <ul>
                <label for="status">Status: </label><br>
                <select name="status">
                    <option>FullTime</option>
                    <option>PartTime</option>
                </select>
            </ul>
            <button type="submit" name="submit">
                Tambah Data
            </button>
        </ul>
    </form>
</body>

</html>