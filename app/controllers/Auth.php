<?php
include_once 'myrc4.php';
class Auth extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    //login halaman pemilih
    function index()
    {
        $this->view('home/login');
    }

    function loginpemilih()
    {
        $this->view('home/login');
    }
    //login halaman kandidat
    function loginkandidat()
    {
        $this->view('home/loginkandidat');
    }
    function loginpanitia()
    {
        $this->view('home/loginpanitia');
    }


    function prosloginpemilih()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $kripto = new myrc4();
        $kripto->setlkstream(8);
        $hasenrc4 = $kripto->enkripsi($password,$username);
        $_POST["password"] = $hasenrc4;
        // var_dump($_POST);
        $data = $this->model('Auth_model')->loginpemilih($_POST['username'], $_POST['password']);
        if (count($data) > 0) {
            //var_dump($data);
            // = $data["username"];
            //echo $data["username"];
            foreach ($data as $user) {
                $_SESSION["nampeg_session"] = $user['nama'];
                $_SESSION["user_session"] = $user['nim'];
            }
            // Flasher::setFlash('berhasil', 'login', 'success', 'anda');
            header('location: ' . baseurl . '/halpemilih');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'login', 'danger', 'anda');
            header('location: ' . baseurl . '/auth/loginpemilih');
            exit;
        }
    }

    function prosloginkandidat()
    {
        $data = $this->model('Auth_model')->loginkandidat($_POST['username'], $_POST['password']);
        if (count($data) > 0) {
            //var_dump($data);
            // = $data["username"];
            //echo $data["username"];
            foreach ($data as $user) {
                $_SESSION["nampeg_session"] = $user['nama_kandidat'];
                $_SESSION["user_session"] = $user['id_kandidat'];
            }
            // Flasher::setFlash('berhasil', 'login', 'success', 'anda');
            header('location: ' . baseurl . '/halkandidat');
            exit;
        } else {
            // Flasher::setFlash('gagal', 'login', 'danger', 'anda');
            header('location: ' . baseurl . '/auth/loginkandidat');
            exit;
        }
    }
    function prosloginpanitia()
    {
        $data = $this->model('Auth_model')->loginpanitia($_POST['username'], $_POST['password']);
        if (count($data) > 0) {
            //var_dump($data);
            // = $data["username"];
            //echo $data["username"];
            foreach ($data as $user) {
                $_SESSION["nampeg_session"] = $user['nama_panitia'];
                $_SESSION["user_session"] = $user['username'];
                $_SESSION["akses"] = $user['id_hakakses'];
            }


            if ($_SESSION["akses"] == 1) {
                //echo "admin";
                // Flasher::setFlash('berhasil', 'login', 'success', 'anda');
                header('location: ' . baseurl . '/haladmin');
                exit;
            } elseif ($_SESSION["akses"] == 2) {
                //echo "pengawas";
                // Flasher::setFlash('berhasil', 'login', 'success', 'anda');
                header('location: ' . baseurl . '/halpanitia');
                exit;
            }
            //echo $_SESSION["akses"];
        } else {
            // Flasher::setFlash('gagal', 'login', 'danger', 'anda');
            header('location: ' . baseurl . '/auth/loginpanitia');
            exit;
        }
    }

    function getuser()
    {
        $this->model('Auth_model')->getuser();
        // var_dump($this->data['id_panitia']);
    }

    /* logging out the user */
    function logout()
    {
        unset($_SESSION['user_session']);
        session_destroy();
        header('location: ' . baseurl . '/auth');
        return true;
    }
}
