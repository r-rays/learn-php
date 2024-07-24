<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "learn-php");

// Ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

if (!$result) {
    mysqli_error($conn);
}

// Ambil data (fetch) mahasiswa daru object result
// $mhs = mysqli_fetch_all($result); Mengembalikan semua nilai
// $mhs = mysqli_fetch_row($result); Mengembalikan array numeric
// $mhs = mysqli_fetch_assoc($result); Mengembalikan array associative
// $mhs = mysqli_fetch_array($result); Mengembalikan keduanya
// $mhs = mysqli_fetch_object($result); Mengembalikan object
// var_dump($mhs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>