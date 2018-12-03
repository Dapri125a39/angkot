<?php 

class Beranda extends CI_Controller{

	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != 'masuk') {
			redirect(base_url('index.php/masuk'));
		}
	}
	
	function index(){
		$judul = "Beranda";
		$data['judul'] = $judul;
		$this->load->view('beranda',$data);
	}

	function pencarian(){
		$judul = "Pencarian Trayek";
		$data['judul'] = $judul;
		$this->load->view('pencarian',$data);
	}

	function rute(){
		$rutess = base_url('assets/img/rute_1.png');
		$judul = "Rute Trayek";
		$data['no_mobil'] = "05";
		$data['warna'] = "Biru";
		$data['tarif'] = "5.000";
		$data['rutes'] = $rutess;
		$data['judul'] = $judul;
		$this->load->view('rute',$data);
	}

	function profil(){
		$data['nama'] = "Tes";
		$data['id'] = "Tes";
		$data['alamat'] = "Tes";
		$judul = "Profil";
		$data['judul'] = $judul;
		$this->load->view('profil',$data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/masuk'));
	}
}

 ?>