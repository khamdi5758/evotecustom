<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getmhs()
    {
        $this->db->query(' SELECT * FROM ' . $this->table);
        return $this->db->resultset();
    }

    public function getmhsbynim($nim)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE nim=:nim');
        $this->db->bind('nim', $nim);

        return $this->db->single();
    }

    public function getmhsdetailbynim($nim)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE nim=:nim');
        $this->db->bind('nim', $nim);

        return $this->db->resultset();
    }

    public function tambahdatamhs($data)
    {
        $query = "INSERT INTO " . $this->table . " (nim, nama, prodi, fakultas, alamat, username, password,lenkystream)
        VALUES (:nim,:nama,:prodi,:fakultas,:alamat,:username,:password,:lenkystream)";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('fakultas', $data['fakultas']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('lenkystream', $data['lenkystream']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editdatamhs($data)
    {
        $query = "UPDATE `" . $this->table . "` SET `nama`=:nama,`prodi`=:prodi,`fakultas`=:fakultas,`alamat`=:alamat,`username`=:username,`password`=:password WHERE `nim` = :nim ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('fakultas', $data['fakultas']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nim', $data['nim']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function deletemhs($nim)
    {
        $query = "DELETE FROM " . $this->table . " WHERE nim =:nim";
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
