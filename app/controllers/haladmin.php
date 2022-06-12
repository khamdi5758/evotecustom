<?php

class haladmin extends Controller
{
    public function index()
    {
        $data['prodi'] = $this->model('Home_model')->getmhs();
        $this->view('templates/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function mahasiswa()
    {
        $data['judul'] = 'mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getmhs();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/indexku', $data);
        $this->view('templates/footer');
    }

    public function panitia()
    {
        $data['judul'] = 'panitia';
        $data['panitia'] = $this->model('Panitia_model')->getpanitia();
        $this->view('templates/header', $data);
        $this->view('panitia/index', $data);
        $this->view('templates/footer');
    }

    public function kandidat()
    {
        $data['judul'] = 'kandidat';
        $data['kandidat'] = $this->model('Kandidat_model')->getkandidat();
        $this->view('templates/header', $data);
        $this->view('kandidat/index', $data);
        $this->view('templates/footer');
    }
}
