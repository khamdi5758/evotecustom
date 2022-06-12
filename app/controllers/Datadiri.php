<?php
class Datadiri extends Controller
{
    public function index()
    {

        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'datadiri';
        // $data['voting'] = $this->model('voting_model')->getvoting();
        $this->view('templates/header', $data);
        $this->view('datadiri/index', $data);
        $this->view('templates_akun/footer');
    }
}
