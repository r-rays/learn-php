<?php
require 'model.php';

$id = $_GET["id"];
$images = read("SELECT * FROM images WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "
            <script>
                alert('Gambar berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gambar gagal diubah');
                document.location.href = 'index.php';
            </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $images["id"]; ?>">
        <input type="hidden" name="oldImage" id="oldImage" value="<?= $images["name"]; ?>">
        <ul>
            <li>
                <label for="nrp">Gambar : </label><br>
                <img src="img/<?= $images["name"]; ?>" width="40"><br>
                <input type="file" name="nrp" id="nrp" required>
            </li>
        </ul>
    </form>
</body>

</html>