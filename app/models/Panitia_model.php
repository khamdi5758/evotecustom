<?php

class Panitia_model
{
    private $table = 'panitia';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getpanitia()
    {
        $this->db->query('SELECT panitia.id_panitia, panitia.nama_panitia, panitia.username, panitia.password, hak_akses.id_hakakses,hak_akses.Keterangan FROM panitia LEFT JOIN hak_akses ON panitia.id_hakakses = hak_akses.id_hakakses');
        return $this->db->resultset();
    }

    public function getpanitiabyid($id)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id_panitia=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function getpanitiadetailbyid($id)
    {
        $this->db->query(' SELECT panitia.id_panitia, panitia.nama_panitia, panitia.username, panitia.password, panitia.id_hakakses,hak_akses.Keterangan FROM panitia LEFT JOIN hak_akses ON panitia.id_hakakses = hak_akses.id_hakakses WHERE id_panitia=:id');
        $this->db->bind('id', $id);

        return $this->db->resultset();
    }

    public function tambahdata($data)
    {
        $query = "INSERT INTO " . $this->table . " (`id_panitia`, `nama_panitia`, `username`, `password`, `id_hakakses`) VALUES (:id,:nama,:username,:password,:hakakses)";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('hakakses', $data['hakakses']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editdata($data)
    {
        $query = "UPDATE " . $this->table . " SET `nama_panitia`=:nama,`username`=:username,`password`=:password, `id_hakakses` =:hakakses WHERE `id_panitia` = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('hakakses', $data['hakakses']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function deletedata($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE `id_panitia` = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
