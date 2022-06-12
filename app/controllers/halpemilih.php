<?php

class halpemilih extends Controller
{
    public function index()
    {
        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'pemilih';
        // $data['nama'] = $nama;
        // $data['angkatan'] = $angkatan;
        // $data['prodi'] = $this->model('Home_model')->getmhs();
        $this->view('templates/header_pemilih', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function prosesvoting()
    {
        $data['judul'] = 'Voting';
        // $this->view('templates/header_pemilih', $data);
        // $this->view('voting/tungguvoting', $data);
        // $this->view('templates_akun/footer');

        $data = $this->model('Voting_model')->getvoting($_SESSION['user_session']);
        if ($data['status_vote'] == 0) {
            $this->view('templates/header_pemilih', $data);
            $this->view('voting/tungguvoting', $data);
            $this->view('templates_akun/footer');
        } else if ($data['status_vote'] == 1) {
            $data['kandidat'] = $this->model('Kandidat_model')->getkandidat();
            //var_dump($data['kandidat']);
            $this->view('templates/header_pemilih', $data);
            $this->view('voting/index', $data);
            $this->view('templates_akun/footer');
        }
    }

    public function voting()
    {
        $data['judul'] = 'Voting';
        // $data['voting'] = $this->model('voting_model')->getvoting();
        $this->view('templates/header_pemilih', $data);
        $this->view('voting/valid', $data);
        $this->view('templates_akun/footer');
    }

    public function suara()
    {
        if ($this->model('Voting_model')->suaramasuk($_POST) > 0) {
            Flasher::setFlash('telah', 'memilih', 'success', 'terima kasih');
            header('location: ' . baseurl . '/halpemilih');
            exit;
        }
    }

    public function prosesregister()
    {
        //var_dump($_POST);
        if ($this->model('Voting_model')->tambahvoting($_POST) > 0) {
            Flasher::setFlash('tunggu', 'sebentar', 'success', 'harap');
            header('location: ' . baseurl . '/halpemilih/prosesvoting');
            exit;
        }
    }

    public function datadiri()
    {
        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'datadiri';
        $data['datausers'] = $this->model('Auth_model')->getpemilihdetailbyid($_SESSION['user_session']);
        //var_dump($data['datausers']);
        $this->view('templates/header_pemilih', $data);
        $this->view('datadiri/datadiripemilih', $data);
        $this->view('templates_akun/footer');
    }
}
