<?php

class Panitia extends Controller
{
    // public function index()
    // {
    //     $data['judul'] = 'panitia';
    //     $data['panitia'] = $this->model('Panitia_model')->getpanitia();
    //     $this->view('templates/header', $data);
    //     $this->view('panitia/index', $data);
    //     $this->view('templates/footer');
    // }


    public function tambah()
    {
        //var_dump($_POST);
        if ($this->model('Panitia_model')->tambahdata($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'mahasiswa');
            header('location: ' . baseurl . '/panitia');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'mahasiswa');
            header('location: ' . baseurl . '/panitia');
            exit;
        }
    }


    public function edit($id)
    {
        $data['judul'] = 'edit panitia';
        $data['panitia'] = $this->model('Panitia_model')->getpanitiadetailbyid($id);
        $this->view('templates/header', $data);
        $this->view('Panitia/edit', $data);
        $this->view('templates/footer');
    }

    public function simpan()
    {
        //var_dump($_POST);
        if ($this->model('Panitia_model')->editdata($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diupdate', 'success', 'mahasiswa');
            header('location: ' . baseurl . '/panitia');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diupdate', 'danger', 'mahasiswa');
            header('location: ' . baseurl . '/panitia');
            exit;
        }
    }

    public function delete($nim)
    {

        if ($this->model('Panitia_model')->deletedata($nim) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'mahasiswa');
            header('location: ' . baseurl . '/panitia');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'mahasiswa');
            header('location: ' . baseurl . '/panitia');
            exit;
        }
    }
}
