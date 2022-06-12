<?php

class Login_model
{
    private $table = 'panitia';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($username, $password)
    {

        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE username=:user & password=:pass');
        $this->db->bind('user', $username);
        $this->db->bind('pass', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
