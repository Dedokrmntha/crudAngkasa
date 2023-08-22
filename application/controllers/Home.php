<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Home
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Jurusan_model');
  }

  public function utama()
  {
    $data['gambar'] = base_url('assets/images/pnb.png');
    $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();
    $this->load->view('home/header');
    $this->load->view('home/navbar');
    $this->load->view('home/body',$data);
    $this->load->view('home/footer');
  }

  public function tabel()
  {
        $data['total'] = $this->Mahasiswa_model->get_total_data_mahasiswa();
        $data['content_view'] = 'data/data_view_mhs';
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('home/footer');
  }
  public function edit($id)
{
  $this->load->view('home/header');
  $this->load->view('home/navbar');
  $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa2($id);
  $data['jurusan'] = $this->Jurusan_model->getJurusan();
  $this->load->view('mahasiswa/edit', $data);
  $this->load->view('home/footer');

}
public function tabel_jurusan()
  {
        $this->load->view('home/header');
        $this->load->view('home/navbar');
        //$data['jurusan'] = $this->Jurusan_model->get_jurusan($id);
        $this->load->view('jurusan/index');
        $this->load->view('home/footer');

}
public function index() {
  $this->load->view('home/header');
  $this->load->view('home/navbar');
  $this->load->view('chart_view');
  $this->load->view('home/footer');

}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */