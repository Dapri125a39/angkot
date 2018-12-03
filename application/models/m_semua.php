<?php

	class M_semua extends CI_Model{
		
		function cek_data($email){
      return $this->db->get_where('pengguna',array('email'=>$email))->num_rows();
		}

		function cek_masuk($where){		
			return $this->db->get_where('pengguna',$where);
		}

		function ambil_data($where){		
			return $this->db->get_where('pengguna',$where);
		}			
	}

 ?>