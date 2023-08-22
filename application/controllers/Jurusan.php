<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public $Kategori_model,$form_validation,$session,$input;

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Jurusan_model');
    }

    public function index()
    {
		$data['jurusan'] = $this->Jurusan_model->getJurusan();
		$this->load->view('home/header');
		$this->load->view('home/navbar');
		$this->load->view('jurusan/index',$data);
		$this->load->view('home/footer');
    }

	public function tambah()
    {
		$this->load->view('home/header');
		$this->load->view('home/navbar');
		$this->load->view('jurusan/tambah');
		$this->load->view('home/footer');
    }

	public function add()
    {
        $this->form_validation->set_rules('nama_jurusan', 'Nama jurusan','required|min_length[1]|max_length[255]|is_unique[jurusan.nama_jurusan]');
		
		if ($this->form_validation->run()==true){
            $this->Jurusan_model->insertJurusan();
            $this->session->set_flashdata('success','Berhasil menambah Jurusan !');
            redirect('jurusan');
        }
        else{
            $this->session->set_flashdata('error', validation_errors());
			redirect('jurusan/tambah');
        }
        
    }

	public function hapus($id)
	{
		$this->Jurusan_model->deleteJurusan($id);
        $this->session->set_flashdata('success','Berhasil menghapus Jurusan !');
		redirect('jurusan');
	}

	public function edit($id)
	{
        $data['jurusan'] = $this->Jurusan_model->getDetailJurusan($id);
        $this->load->view('home/header');
		$this->load->view('home/navbar');
        $this->load->view('jurusan/edit',$data);
        $this->load->view('home/footer'); 
	}

	public function editProcess()
	{
		$data = $this->Jurusan_model->getDetailJurusan($this->input->post('id_jurusan'));
		if($data['nama_jurusan'] == $this->input->post('nama_jurusan')){
			$this->form_validation->set_rules('nama_jurusan', 'Nama jurusan','required|min_length[1]|max_length[255]');
		}
		else{
			$this->form_validation->set_rules('nama_jurusan', 'Nama jurusan','required|min_length[1]|max_length[255]|is_unique[jurusan.nama_jurusan]');
		}
		
		if ($this->form_validation->run()==true){
			$this->Jurusan_model->editJurusan();
            $this->session->set_flashdata('success','Jurusan berhasil diubah !');
			redirect('jurusan');
        }
        else{
            $this->session->set_flashdata('error', validation_errors());
			redirect('jurusan/edit/'.$this->input->post('id_jurusan'));
        }
	}
}

/* End of file KategoriController.php and path \application\controllers\KategoriController.php */