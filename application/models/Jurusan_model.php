<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Jurusan_model extends CI_Model 
{
    public function getJurusan()
    {
		$this->db->order_by('id_jurusan','desc');
		$result = $this->db->get('jurusan');
		return $result;
    }          
	
	public function insertJurusan()
	{
        $insert = array(
            'nama_jurusan' => $this->input->post('nama_jurusan')
        );
        $result = $this->db->insert('jurusan', $insert);

		return $result;
	}    

	public function deleteJurusan($id)
	{
		$this->db->where('id_jurusan', $id);
		$result = $this->db->delete('jurusan');
		return $result;
	}

	public function getDetailJurusan($id)
	{
		$this->db->where('id_jurusan',$id);
		$result = $this->db->get('jurusan')->result_array();
		return $result[0];
	}

    public function editJurusan()
	{
		$edit = array(
			'id_jurusan' => $this->input->post('id_jurusan'),
			'nama_jurusan' => $this->input->post('nama_jurusan'),
		);
        $this->db->where('id_jurusan', $this->input->post('id_jurusan'));
		$result = $this->db->update('jurusan', $edit);
		return $result;
	}
                        
}


/* End of file Kategori_model.php and path \application\models\Kategori_model.php */