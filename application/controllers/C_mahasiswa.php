<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index() {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();
        $this->load->view('mahasiswa/index', $data);
    }

    public function create() {
        $this->load->view('mahasiswa/create');
    }

    public function store() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim')
        );
        $this->Mahasiswa_model->insert_mahasiswa($data);
        redirect('mahasiswa');
    }

    public function edit($id) {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_edit($id);
        $this->load->view('mahasiswa/edit', $data);
    }

    public function update($id) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim')
        );
        $this->Mahasiswa_model->update_mahasiswa($id, $data);
        redirect('mahasiswa');
    }

    public function delete($id) {
        $this->Mahasiswa_model->delete_mahasiswa($id);
        redirect('mahasiswa');
    }
}
?>
