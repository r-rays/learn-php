<?php
require 'model.php';

if (isset($_POST["submit"])) {
    if (create($_POST) > 0) {
        echo "
            <script>
                alert('Gambar berhasil diupload');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gambar gagal diupload');
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
    <title>Upload Gambar</title>
</head>

<body>
    <h1>Upload Gambar</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="image">Gambar :</label>
                <input type="file" name="image" id="image">
            </li>
        </ul>
    </form>
</body>

</html>