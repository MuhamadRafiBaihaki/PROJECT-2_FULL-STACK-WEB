<?php
class User_model extends CI_Model {
    private $table = "users";

    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username=?
                and password=MD5(?)";
        $data = [$username, $password];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function regist($data)
    {
        $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role)
        VALUES (default, ?, MD5(?), ?, now(), now(), 1, default)";
        $this->db->query($sql, $data);
    }
}