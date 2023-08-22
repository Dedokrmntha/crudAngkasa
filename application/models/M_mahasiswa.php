<?php
class Mahasiswa_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_mahasiswa() {
        $query = $this->db->get('mahasiswa2');
        return $query->result();
    }
    public function get_edit() {
      $query = $this->db->get('mahasiswa2');
      return $query->row();
  }

    public function insert_mahasiswa($data) {
        return $this->db->insert('mahasiswa2', $data);
    }

    public function update_mahasiswa($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('mahasiswa2', $data);
    }

    public function delete_mahasiswa($id) {
        $this->db->where('id', $id);
        return $this->db->delete('mahasiswa2');
    }
}
?>
