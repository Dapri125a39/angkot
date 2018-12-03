<?php
class Model_angkot extends CI_Model{
    
    function list_angkot (){
        //ambil data angkot dari tabel angkot
        $angkot = $this->db->get('angkot');
        return $angkot;
    }
    function product ($no_angkot){
        return $this->db->get_where('angkot',array('no_angkot'=>$no_angkot));
 
    }
}
