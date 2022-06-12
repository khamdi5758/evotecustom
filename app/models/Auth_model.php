<?php
class Auth_model
{
    private $table = 'panitia';
    private $table2 = 'kandidat';
    private $table3 = 'mahasiswa';
    private $db;
    public $datalogin;
    public function __construct()
    {
        $this->db = new Database;
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    public function loginpemilih($username, $password)
    {
        $this->db->query(' SELECT * FROM ' . $this->table3 . ' WHERE username=:username AND password =:pass');
        $this->db->bind('username', $username);
        $this->db->bind('pass', $password);
        $data = $this->db->resultset();
        return $data;
    }
    public function loginkandidat($username, $password)
    {
        $this->db->query(' SELECT * FROM ' . $this->table2 . ' WHERE username=:username AND password =:pass');
        $this->db->bind('username', $username);
        $this->db->bind('pass', $password);
        $data = $this->db->resultset();
        return $data;
    }

    public function loginpanitia($username, $password)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE username=:username AND password =:pass');
        $this->db->bind('username', $username);
        $this->db->bind('pass', $password);
        $data = $this->db->resultset();
        return $data;
    }

    public function getdatalogin()
    {
        return $this->datalogin;
    }

    public function isLoggedIn()
    {
        // Apakah user_session sudah ada di session 
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function getuser()
    {
        if (!$this->isLoggedIn()) {
            return false;
        }
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id_panitia=:id_panitia');
        $this->db->bind('id_panitia', $_SESSION['user_session']);
        return $this->db->resultset();
    }


    public function getpanitiadetailbyid($id)
    {
        $this->db->query(' SELECT panitia.id_panitia, panitia.nama_panitia, panitia.username, panitia.password, panitia.id_hakakses,hak_akses.Keterangan FROM panitia LEFT JOIN hak_akses ON panitia.id_hakakses = hak_akses.id_hakakses WHERE id_panitia=:id');
        $this->db->bind('id', $id);

        return $this->db->resultset();
    }
    public function getpemilihdetailbyid($nim)
    {
        $this->db->query(' SELECT * FROM ' . $this->table3 . ' WHERE nim = :nim');
        $this->db->bind('nim', $nim);

        return $this->db->resultset();
    }
}
