<?php
require 'model.php';

if (isset($_GET["search"])) {
    $mahasiswa = search($_GET["keyword"]);
} else {
    $mahasiswa = read("SELECT * FROM mahasiswa");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database 2</title>
    <style>
        .create {
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 1s;
        }

        .create:hover {
            background-color: skyblue;
        }
    </style>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px 100px;">
        <h1>Daftar Mahasiswa</h1>
        <a href="create.php"><button type="button" class="create">Tambah</button></a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" id="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="search">Cari!</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Ubah</a> |
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>