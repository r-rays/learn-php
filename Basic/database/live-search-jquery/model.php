<?php
// Koneksi ke database
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

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO mahasiswa (nama, nrp, jurusan, email) VALUES
        ('$nama', '$nrp', '$jurusan', '$email')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);

    $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            jurusan = '$jurusan',
            email = '$email'
        WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE
        nama LIKE '%$keyword%' OR
        nrp LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' OR
        email LIKE '%$keyword%'
    ";

    return read($query);
}

function registration($data)
{
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username sudah terdaftar!');
            </script>
        ";
        return false;
    }

    if ($password !== $password2) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai!');
            </script>
        ";
        return false;
    }

    // $password = md5($password);
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

    return mysqli_affected_rows($conn);
}
