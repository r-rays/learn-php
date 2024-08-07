<?php
class About extends Controller
{
    public function index($nama = "Rieky Rayson", $pekerjaan = "Software Engineer", $umur = 19)
    {
        $data["title"] = "About";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["umur"] = $umur;
        $this->view('partials/header', $data);
        $this->view('about/index', $data);
        $this->view('partials/footer', $data);
    }
}
