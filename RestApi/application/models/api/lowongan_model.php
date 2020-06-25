<?php 
 
class lowongan_model extends CI_Model {
    protected $lowongan_kerja = 'lowongan';


    public function getLowongan()
    {
        return $this->db->get('lowongan')->result_array();
    }

}