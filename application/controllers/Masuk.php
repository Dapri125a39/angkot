<?php 

class Masuk extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_semua');

		if($this->session->userdata('status') == 'masuk') {
			redirect(base_url('index.php/beranda'));
		}
	}

	function index(){
		$judul = "Rute Angkot Kota Bogor";
		$data['judul'] = $judul;
		$this->load->view('login',$data);
	}

	function aksi_masuk(){
		$email = $this->input->post('email');
		$sandi = $this->input->post('sandi');
		$query = array(
			'email' => $email,
			'kata_sandi' => $sandi
			);
		$data = $this->m_semua->ambil_data($query)->row_array();
		$cek = $this->m_semua->cek_masuk($query)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $data['nm_pengguna'],
				'email' => $data['email'],
				'status' => "masuk"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/beranda/"));
		}else{
			$this->session->set_flashdata('gagal_login','
			<div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4> Email atau Kata Sandi Salah !!!!!!!</h4>        
      </div>
			');
			redirect(base_url("index.php/masuk"));
		}
	}
}