<?php
class Kelola_mobil_model extends CI_Model {
    private $table = "mobil";

    public function findById($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function update($data)
    {
        $sql = "UPDATE mobil SET nopol=?,warna=?,biaya_sewa=?,deskripsi=?,
        cc=?, tahun=?, merk_id=?, foto=?, nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function save($data)
    {
        $sql = "INSERT INTO mobil (id, nopol, warna, biaya_sewa, deskripsi, cc, tahun, merk_id, foto, nama)
        VALUES (default, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM mobil WHERE id=?";
        $this->db->query($sql, array($id));
    }

}