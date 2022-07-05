<?php
class Welcome_model extends CI_Model {
    private $table = "mobil";
    private $table2 = "sewa";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function saveOrder($data)
    {
        $sql = "INSERT INTO sewa (id, tanggal_mulai, tanggal_akhir, tujuan, noktp, users_id, mobil_id)
                VALUES (default, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, $data);
    }

}