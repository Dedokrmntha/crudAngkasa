<?php
class Mahasiswa_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_mahasiswa() {
        $this->db->join('jurusan','jurusan.id_jurusan = mahasiswa2.id_jurusan');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('mahasiswa2');
        return $query->result();
    }
    public function get_mahasiswa2($id) {
        $this->db->where('mahasiswa2.id',$id);
        $result = $this->db->get('mahasiswa2')->result_array();
		return $result[0];
        //$query = $this->db->get('mahasiswa2', array('id' => $id));
        //return $query->row();
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
