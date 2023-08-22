<?php
class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Jurusan_model');
    }

    public function index() {
        //$data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();
        //$this->load->view('mahasiswa/index', $data);
    }

    public function create() {
        $data['jurusan'] = $this->Jurusan_model->getJurusan();
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        $this->load->view('mahasiswa/create',$data);
        $this->load->view('home/footer');
        
    }

    public function store() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'umur' => $this->input->post('umur'),
            'alamat' => $this->input->post('alamat'),
            'id_jurusan' => $this->input->post('id_jurusan')
        );
        $this->Mahasiswa_model->insert_mahasiswa($data);
        redirect('home/tabel');
    }

    public function edit($id) {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa2($id);
        $data['jurusan'] = $this->Jurusan_model->getJurusan();
        $this->load->view('mahasiswa/edit', $data);
    }

    public function update($id) {
        // $data = $this->Mahasiswa_model->get_mahasiswa2($this->input->post('id'));
		// if($data['nama'] == $this->input->post('nama'));
        //     redirect('home/tabel');
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'umur' => $this->input->post('umur'),
            'alamat' => $this->input->post('alamat'),
            'id_jurusan' => $this->input->post('id_jurusan')
       );
        $this->Mahasiswa_model->update_mahasiswa($id, $data);
       redirect('home/tabel');
    }

    public function delete($id) {
        $this->Mahasiswa_model->delete_mahasiswa($id);
        redirect('home/tabel');
    }
    public function data() {
        $data['total'] = $this->Mahasiswa_model->get_total_data_mahasiswa();
        $data['content_view'] = 'data/data_view_mhs';
        $this->load->view('template', $data);
    }
}
?>
