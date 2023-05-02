<?php
include_once 'myrc4.php';
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
        foreach ($data['mhs'] as $mhs) {
            $unmmhs = $mhs['username'];
            $pwmhs =  $mhs['password'];
            $lkstrm = $mhs['lenkystream'];
            $dekrip = new myrc4();
            $dekrip->setlkstream($lkstrm);
            $dekrip->getlkstream();
            $dpwmhs = $dekrip->deskripsi($pwmhs,$unmmhs);
            // echo $dpwmhs;
            $temp = $mhs['password'];
            $mhs['password'] = $dpwmhs;
            $dpwmhs = $temp;
            // $mhs['password'] = $dpwmhs;
        }
        // var_dump($data['mhs']);
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
