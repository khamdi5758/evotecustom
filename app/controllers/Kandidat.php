<?php

class Kandidat extends Controller
{
    // public function index()
    // {
    //     $data['judul'] = 'kandidat';
    //     $data['kandidat'] = $this->model('Kandidat_model')->getkandidat();
    //     $this->view('templates/header', $data);
    //     $this->view('kandidat/index', $data);
    //     $this->view('templates/footer');
    // }


    public function tambah()
    {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $nama = $_FILES['gambar']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $dirupload = getcwd() . "/images/";

        // $targetpath =$dirupload. basename( $_FILES["gambar"]["name"]);


        // $terupload = move_uploaded_file($file_tmp, $dirupload . $nama);
        // if ($terupload) {
        //     echo "Upload berhasil!<br/>";
        //     echo "Link: <a href='" . $dirupload . $nama . "'>" . $nama . "</a>";
        // } else {
        //     echo "Upload Gagal!";
        // }



        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 1044070 && $this->model('Kandidat_model')->tambahdata($_POST, $nama) > 0) {
                move_uploaded_file($file_tmp, $dirupload . $nama);
                // $_POST['gambar'] = $nama;
                Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'kandidat');
                header('location: ' . baseurl . '/kandidat');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'kandidat');
                header('location: ' . baseurl . '/kandidat');
                exit;
                // echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }



        // var_dump($_FILES);
        // if ($this->model('Kandidat_model')->tambahdata($_POST) > 0) {
        //     Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'kandidat');
        //     header('location: ' . baseurl . '/kandidat');
        //     exit;
        // } else {
        //     Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'kandidat');
        //     header('location: ' . baseurl . '/kandidat');
        //     exit;
        // }
    }


    public function edit($id)
    {
        $data['judul'] = 'edit kandidat';
        $data['kandidat'] = $this->model('Kandidat_model')->getkandidatdetailbyid($id);
        $this->view('templates/header', $data);
        $this->view('kandidat/edit', $data);
        $this->view('templates/footer');
    }

    public function simpan()
    {

        // var_dump($_POST);
        if ($this->model('Kandidat_model')->editdata($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diupdate', 'success', 'kandidat');
            header('location: ' . baseurl . '/kandidat');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diupdate', 'danger', 'kandidat');
            header('location: ' . baseurl . '/kandidat');
            exit;
        }
    }

    public function delete($id)
    {

        if ($this->model('Kandidat_model')->deletedata($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'kandidat');
            header('location: ' . baseurl . '/kandidat');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'kandidat');
            header('location: ' . baseurl . '/kandidat');
            exit;
        }
    }
}
