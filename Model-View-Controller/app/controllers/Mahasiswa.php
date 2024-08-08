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

    public function detail($id)
    {
        $data["title"] = 'Detail Mahasiswa';
        $data["mahasiswa"] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('partials/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('partials/footer', $data);
    }

    public function create()
    {
        if ($this->model('Mahasiswa_model')->createMahasiswa($_POST) > 0) {
            header('Location: ' . baseURL . '/mahasiswa');
            exit;
        }
    }
}
