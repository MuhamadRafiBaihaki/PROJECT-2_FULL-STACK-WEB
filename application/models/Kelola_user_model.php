<?php
class Kelola_user_model extends CI_Model {
    private $table = "users";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function update($data)
    {
        $sql = "UPDATE users SET username=?,password=MD5(?),email=?,status=?,
        role=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function save()
    {
        $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role)
        VALUES (default, ?, MD5(?), ?, now(), now(), 1, default)";
        $this->db->query($sql, $data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, array($id));
    }

}