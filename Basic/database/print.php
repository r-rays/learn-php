<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

session_start();
if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'model.php';

$amountDataPerPage = 5;
$amountData = count(read("SELECT * FROM mahasiswa"));
$amountPage = ceil($amountData / $amountDataPerPage);

$activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;

$firstData = ($amountDataPerPage * $activePage) - $amountData;

$mahasiswa = read("SELECT * FROM mahasiswa LIMIT $firstData, $amountDataPerPage");

$content = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>

<body>
    <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px 100px;">
        <h1>Daftar Mahasiswa</h1>
    </div>

    <br>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>';
foreach ($mahasiswa as $row) {
    $content .= '
            <tr>
                <td>' . ($i++) + 1 . '</td>
                <td>' . $row['nama'] . '</td>
                <td>' . $row['nrp'] . '</td>
                <td>' . $row['jurusan'] . '</td>
                <td>' . $row['email'] . '</td>
            </tr>
            ';
}
$content .= '
</table>
</body>

</html>
';

$mpdf->WriteHTML($content);
// $mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
$mpdf->Output('daftar-mahasiswa.pdf', 'I');
