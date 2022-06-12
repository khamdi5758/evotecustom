<?php

class Mahasiswa extends Controller
{
    // public function index()
    // {

    //     echo "nama saya $nama , angkatan $angkatan";
    //     $data['judul'] = 'mahasiswa';
    //     $data['mhs'] = $this->model('Mahasiswa_model')->getmhs();
    //     $this->view('templates/header', $data);
    //     $this->view('mahasiswa/indexku', $data);
    //     $this->view('templates/footer');
    // }

    public function tambah()
    {
        //var_dump($_POST);
        if ($this->model('Mahasiswa_model')->tambahdatamhs($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'mahasiswa');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'mahasiswa');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        }
    }


    public function edit($nim)
    {

        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'edit mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getmhsdetailbynim($nim);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/footer');
    }

    public function simpan()
    {
        // var_dump($_POST);
        if ($this->model('Mahasiswa_model')->editdatamhs($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diupdate', 'success', 'mahasiswa');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diupdate', 'danger', 'mahasiswa');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        }
    }

    public function delete($nim)
    {

        if ($this->model('Mahasiswa_model')->deletemhs($nim) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'mahasiswa');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'mahasiswa');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        }
    }
}
