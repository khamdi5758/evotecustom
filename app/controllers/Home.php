<?php
class Home extends controller
{
    public function index()
    {
        //echo "nama saya $nama , angkatan $angkatan";
        // $data['judul'] = 'dashboard';
        // $data['nama'] = $nama;
        // $data['angkatan'] = $angkatan;
        $data['kandidat'] = $this->model('Kandidat_model')->getkandidat();
        // foreach ($data['kandidat'] as $kandidat) {
        //     $data['suarakandidat'] = $this->model('Voting_model')->jumlahsuara($kandidat['id_kandidat']);
        //     echo "\n";
        //     echo count($data['suarakandidat']).",";
        // }
        //var_dump($data['kandidat']);
        $this->view('templates/header_halamandepan');
        $this->view('home/coba', $data);
        $this->view('templates/footer_halamandepan');
        //$this->view('home/coba2', $data);
    }
}
