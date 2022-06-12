<?php

class halkandidat extends Controller
{
    public function index($nama = 'khamdi', $angkatan = '19')
    {
        //echo "nama saya $nama , angkatan $angkatan";
        $data['judul'] = 'admin';
        // $data['nama'] = $nama;
        // $data['angkatan'] = $angkatan;
        // $data['prodi'] = $this->model('Home_model')->getmhs();
        $this->view('templates/header_kandidat', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function pengaturansaya()
    {
        $data['judul'] = 'pendukung';
        $data['kandidat'] = $this->model('Kandidat_model')->getkandidatdetailbyid($_SESSION["user_session"]);
        $this->view('templates/header_kandidat', $data);
        $this->view('kandidat/pengaturansaya', $data);
        $this->view('templates/footer');
    }

    public function pendukung()
    {
        $data['judul'] = 'pendukung';
        $data['pendukung'] = $this->model('Kandidat_model')->getpendukung($_SESSION["user_session"]);
        $this->view('templates/header_kandidat', $data);
        $this->view('kandidat/pendukung', $data);
        $this->view('templates/footer');
    }

    public function tambahpendukung()
    {
        if ($this->model('Kandidat_model')->tambahdatapendukung($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'pendukung');
            header('location: ' . baseurl . '/halkandidat/pendukung');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'pendukung');
            header('location: ' . baseurl . '/halkandidat/pendukung');
            exit;
        }
    }

    public function simpan()
    {

        $ekstensi_diperbolehkan = array('png', 'jpg', '');
        $nama = $_FILES['gambar']['name'];
        $namax = $_POST['gambarx'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $dirupload = getcwd() . "/images/";
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {

            if (!$file_tmp == "") {
                if ($ukuran < 1044070 && $this->model('Kandidat_model')->editdata($_POST, $nama) > 0) {

                    move_uploaded_file($file_tmp, $dirupload . $nama);
                    // $_POST['gambar'] = $nama;
                    Flasher::setFlash('berhasil', 'diubah', 'success', 'data');
                    header('location: ' . baseurl . '/halkandidat/pengaturansaya');
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'diubah', 'danger', 'data');
                    header('location: ' . baseurl . '/halkandidat/pengaturansaya');
                    exit;
                    // echo 'UKURAN FILE TERLALU BESAR';
                }
            } else {
                $nama = $_FILES['gambarx']['name'];
                if ($ukuran < 1044070 && $this->model('Kandidat_model')->editdata($_POST, $namax) > 0) {
                    // $_POST['gambar'] = $nama;
                    Flasher::setFlash('berhasil', 'diubah', 'success', 'data');
                    header('location: ' . baseurl . '/halkandidat/pengaturansaya');
                    exit;
                } else {
                    Flasher::setFlash('gagal', 'diubah', 'danger', 'data');
                    header('location: ' . baseurl . '/halkandidat/pengaturansaya');
                    exit;
                    // echo 'UKURAN FILE TERLALU BESAR';
                }
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }

    public function delete($nim)
    {
        if ($this->model('Kandidat_model')->deletedatapendukung($nim) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'pendukung');
            header('location: ' . baseurl . '/halkandidat/pendukung');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'pendukung');
            header('location: ' . baseurl . '/halkandidat/pendukung');
            exit;
        }
    }
}
