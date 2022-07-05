<?php
class View_model extends CI_Model {
    private $table = "mobil";

    public function findById($_id)
    {
        $this->db->where("id", $_id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
}