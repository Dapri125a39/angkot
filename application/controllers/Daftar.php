<?php 

class Daftar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_semua');
	}
	
	function index(){
		$judul = "Rute Angkot Kota Bogor";
		$data['judul'] = $judul;
		$this->load->view('daftar',$data);	
	}

	function input_simpan(){
		$email = $this->input->post('email');
	  $dataPengguna = array (
	    'nm_pengguna'=> $this->input->post('nama'),
	    'email'=> $this->input->post('email'),
	    'kata_sandi'=> $this->input->post('sandi')
	  );
		$cek = $this->m_semua->cek_data($email);
		if ($cek > 0) {
			$this->session->set_flashdata('ada','
				<div class="alert alert-danger alert-dismissible">
	      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      <h4> Email sudah ada <strong>gunakan email yang berbeda!!!</strong></h4>        
	      </div>
				');
		  redirect(base_url('index.php/daftar'));
		}else{
		  $this->db->insert('pengguna',$dataPengguna);
		  redirect(base_url('index.php/masuk'));
		}
	}
}

 ?>
