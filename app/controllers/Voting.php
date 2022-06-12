<?php
class Voting extends Controller
{
    public function index()
    {

        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'Voting';
        $data['voting'] = $this->model('voting_model')->getvotingmasuk();
        $this->view('templates/header_', $data);
        $this->view('voting/index', $data);
        $this->view('templates_akun/footer');
    }

    public function updatestatus($nim)
    {
        if ($this->model('Voting_model')->editstatusevote($nim) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'data');
            header('location: ' . baseurl . '/halpanitia/validvoting');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'data');
            header('location: ' . baseurl . '/halpanitia/validvoting');
            exit;
        }
    }
}
