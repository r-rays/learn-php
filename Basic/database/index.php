<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'model.php';

$amountDataPerPage = 5;
$amountData = count(read("SELECT * FROM mahasiswa"));
$amountPage = ceil($amountData / $amountDataPerPage);

// if (isset($_GET['page'])) {
//     $activePage = $_GET['page'];
// } else {
//     $activePage = 1;
// }

$activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;

$firstData = ($amountDataPerPage * $activePage) - $amountData;

$mahasiswa = read("SELECT * FROM mahasiswa LIMIT $firstData, $amountDataPerPage");

if (isset($_GET["search"])) {
    $mahasiswa = search($_GET["keyword"]);
    unset($_GET);
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
    <a href="logout.php">Logout</a>
    <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px 100px;">
        <h1>Daftar Mahasiswa</h1>
        <a href="create.php"><button type="button" class="create">Tambah</button></a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" id="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="search">Cari!</button>
    </form>

    <br>

    <?php if ($activePage > 1) : ?>
        <a href="?page=<?= $activePage - 1; ?>">&lt;</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $amountPage; $i++) : ?>
        <a href="?page=<?= $i; ?>" style="<?= ($i === $activePage) ? 'font-weight: bold;' : ''; ?>"><?= $i; ?></a>
    <?php endfor; ?>
    <?php if ($activePage < $amountPage) : ?>
        <a href="?page=<?= $activePage + 1; ?>">&gt;</a>
    <?php endif; ?>

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