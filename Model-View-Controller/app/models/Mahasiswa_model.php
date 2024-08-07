<?php
class Mahasiswa_model
{
    // private $mahasiswa = [
    //     [
    //         "nama" => "Rieky Rayson",
    //         "nrp" => "1234567890",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "dummy@mail.com"
    //     ],
    //     [
    //         "nama" => "Fitaria Gustina",
    //         "nrp" => "1234567890",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "dummy@mail.com"
    //     ],
    //     [
    //         "nama" => "Galih Darmawan Kusuma",
    //         "nrp" => "1234567890",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "dummy@mail.com"
    //     ],
    //     [
    //         "nama" => "Farell Imanuello Alexi",
    //         "nrp" => "1234567890",
    //         "jurusan" => "Teknik Informatika",
    //         "email" => "dummy@mail.com"
    //     ],
    // ];

    // Database Handler
    private $dbh;

    // Statement
    private $stmt;

    public function __construct()
    {
        // Data Source Name
        $dsn = 'mysql:host=localhost;dbname=learn-php';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
