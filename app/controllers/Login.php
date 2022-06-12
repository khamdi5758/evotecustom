<?php

class Mahasiswa extends Controller
{


    public function login()
    {
        //var_dump($_POST);
        if ($this->model('Login_model')->tambahdatamhs($_POST) > 0) {
            Flasher::setFlash('berhasil', 'login', 'success', 'anda');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'login', 'danger', 'anda');
            header('location: ' . baseurl . '/mahasiswa');
            exit;
        }
    }
}
