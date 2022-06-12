<?php

class Kandidat_model
{

    private $table = 'kandidat';
    private $table2 = 'pendukung';
    private $table3 = 'pendukung_kandidat';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getkandidat()
    {
        $this->db->query('SELECT * FROM `' . $this->table . '`');
        return $this->db->resultset();
    }

    public function getkandidatbyid($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kandidat=:id');
        $this->db->bind('id', $id);

        return $this->db->resultset();
    }

    public function getkandidatdetailbyid($id)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id_kandidat=:id');
        $this->db->bind('id', $id);

        return $this->db->resultset();
    }

    public function getpendukung($id)
    {
        $this->db->query(' SELECT * FROM ' . $this->table2 . ' WHERE id_kandidat=:id');
        $this->db->bind('id', $id);

        return $this->db->resultset();
    }


    public function tambahdata($data, $namagambar)
    {
        $query = "INSERT INTO " . $this->table . " (`id_kandidat`, `nama_kandidat`, `visi`, `misi`, `username`, `password`, `gambar`) VALUES (:id,:nama,:visi,:misi,:username,:password,:gambar)";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('visi', $data['visi']);
        $this->db->bind('misi', $data['misi']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('gambar', $namagambar);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahdatapendukung($data)
    {
        $query = "INSERT INTO " . $this->table3 . " (`id_kandidat`, `nim_pendukung`) VALUES (:id,:nim)";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nim', $data['nim']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editdata($data, $namagambar)
    {
        $query = "UPDATE " . $this->table . " SET `nama_kandidat`=:nama,`visi`=:visi,`misi`=:misi,`gambar`=:gambar WHERE `id_kandidat` = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('visi', $data['visi']);
        $this->db->bind('misi', $data['misi']);
        $this->db->bind('gambar', $namagambar);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function deletedata($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_kandidat = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deletedatapendukung($nim)
    {
        $query = "DELETE FROM " . $this->table3 . " WHERE nim_pendukung = :nim";
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
