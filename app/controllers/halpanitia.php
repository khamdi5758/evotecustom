<?php

class halpanitia extends Controller
{
    public function index()
    {
        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'panitia';
        $data['prodi'] = $this->model('Home_model')->getmhs();
        $this->view('templates/header_panitia', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function validvoting()
    {
        $data['judul'] = 'Voting';
        $data['voting'] = $this->model('voting_model')->getvotingmasuk();
        $this->view('templates/header_panitia', $data);
        $this->view('voting/pesertain', $data);
        $this->view('templates_akun/footer');
    }
    public function datadiri()
    {
        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'datadiri';
        $data['datausers'] = $this->model('Auth_model')->getpanitiadetailbyid($_SESSION['user_session']);
        $this->view('templates/header_panitia', $data);
        $this->view('datadiri/datadiripanitia', $data);
        $this->view('templates_akun/footer');
    }
}
