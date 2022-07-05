<?php
class Kelola_merk_model extends CI_Model {
    private $table = "merk";

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
        $sql = "UPDATE merk SET nama=?,produk=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function save($data)
    {
        $sql = "INSERT INTO merk (id, nama, produk)
        VALUES (default, ?, ?)";
        $this->db->query($sql, $data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM merk WHERE id=?";
        $this->db->query($sql, array($id));
    }

}