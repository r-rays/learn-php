<?php
require '../model.php';

$keyword = $_GET['search'];

$query = "SELECT * FROM mahasiswa WHERE
        nama LIKE '%$keyword%' OR
        nrp LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' OR
        email LIKE '%$keyword%'
    ";
$mahasiswa = read($query);
?>

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