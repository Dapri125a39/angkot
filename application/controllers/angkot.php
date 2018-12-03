<?php
class angkot extends CI_Controller{
    
    function index (){
       $this->load->model('model_angkot');
       $judul            = "RUTE ANGKOT KOTA BOGOR";
       $data['judul']     =$judul;
       $data['angKOT']=$this->model_angkot->list_angkot()->result();
      $this->load->view('list_angkot',$data);
    }
    function input(){
        $this->load->view('input_angkot');
    }
    function input_simpan(){
        $dataangkot = array (
          'no_angkot'=> $this->input->post('no_angkot'),
          'jurusan_angkot'=> $this->input->post('jurusan_angkot'),
          'nm_rute'=> $this->input->post('nm_rute'),
          'warna_angkot'=> $this->input->post('warna_angkot')
        );
        $this->db->insert('anggota',$dataanggota);
        redirect('anggota');
    }
            function edit(){
                $this->load->model('model_angkot');
                $no_anggota = $this->uri->segment('3');
                $data['product']= $this->model_anggota->product($no_anggota)->row_array();
                $this->load->view('edit_anggota',$data);
            }
            function edit_simpan(){
                $id     = $this->input->poost('no_angkot');
                $dataanggota    =array(
                'no_anggota' => $this->input->post('no_anggota'),
                'jurusan_angkot'       => $this->input->post('jurusan_angkot'),
                'nm_rute' => $this->input->post('nm_rute'),
                'warna_angkot'       => $this->input->post('warna_angkot'),);
                
                $no_anggota = $this->uri->segment(3);
                $this->db->where('no_anggota',$no_anggota);
                $this->db->delete ('anggota');
                redirect('anggota');
            }
            function delete(){
                $no_anggota = $this->uri->segment(3);
                $this->db->where('no_anggota',$no_anggota);
                $this->db->delete ('anggota');
                redirect('anggota');
                  
       
    }
}