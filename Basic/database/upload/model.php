<?php
$conn = mysqli_connect("localhost", "root", "", "learn-php");

function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function create($data)
{
    global $conn;

    $gambar = upload();

    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO images (name) VALUES
        ('$gambar')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $oldImage = htmlspecialchars($data["oldImage"]);

    if ($_FILES["name"]['error'] === 4) {
        $image = $oldImage;
    } else {
        $image = upload();
    }
}

function upload()
{
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    if ($error === 4) {
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu!');
            </script>
        ";
        return false;
    }

    $validImageExtension = ['jpeg', 'jpg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtension)) {
        echo "
            <script>
                alert('Yang Anda upload bukanlah gambar valid!');
            </script>
        ";
        return false;
    }

    if ($fileSize > 2000000) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar!');
            </script>
        ";
        return false;
    }

    $newFileName = uniqid() . '.' . $imageExtension;

    move_uploaded_file($tmpName, 'img/' . $newFileName);

    return $fileName;
}
