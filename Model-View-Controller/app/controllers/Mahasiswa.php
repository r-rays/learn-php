<?php
class Mahasiswa extends Controller
{
    public function index()
    {
        $data["title"] = 'Mahasiswa';
        $data["mahasiswa"] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('partials/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('partials/footer', $data);
    }
}
