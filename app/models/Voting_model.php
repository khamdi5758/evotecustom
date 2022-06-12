<?php

class Voting_model
{
    private $table = 'voting';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getvoting($nim)
    {
        $query = "SELECT * FROM `" . $this->table . "` where `nim` = :nim";
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        // $this->db->query($query);
        // $this->db->execute();
        $data = $this->db->single();
        return $data;
    }

    public function getvotingmasuk()
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE status_vote = 0');
        return $this->db->resultset();
    }

    public function tambahvoting($data)
    {
        $query = "INSERT INTO " . $this->table . " (nim, status_vote)
        VALUES (:nim,:status)";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('status', $data['status']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editstatusevote($nim)
    {
        $query = "UPDATE `" . $this->table . "` SET status_vote=1 WHERE `nim` = :nim ";
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function suaramasuk($data)
    {
        $query = "UPDATE `" . $this->table . "` SET suara_kandidat=:suara WHERE `nim` = :nim ";
        $this->db->query($query);
        $this->db->bind('suara', $data['suara']);
        $this->db->bind('nim', $data['nim']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function jumlahsuara($id)
    {
        $this->db->query('SELECT * FROM `' . $this->table . '` WHERE suara_kandidat=:id');
        $this->db->bind('id', $id);

        return $this->db->resultset();
    }
    // public function jumlahsuara($id)
    // {
    //     $this->db->query('SELECT COUNT(suara_kandidat)FROM '.$this->table.' WHERE suara_kandidat = :id');
    //     $this->db->bind('id', $id);
    //     return $this->db->resultset();
    // }
    // public function jumlahsuara()
    // {
    //     $this->db->query('SELECT * FROM voting ORDER BY suara_kandidat ASC');
    //     return $this->db->resultset();
    // }
    // public function deletemhs($nim)
    // {
    //     $query = "DELETE FROM " . $this->table . " WHERE nim =:nim";
    //     $this->db->query($query);
    //     $this->db->bind('nim', $nim);
    //     $this->db->execute();
    //     return $this->db->rowCount();
    // }
}