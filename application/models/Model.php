<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
    public function data_turnamen(){
        return $this->db->get("data_turnamen")->result();
    }

    public function data_turnamen_byid($id){
        return $this->db->get_where("data_turnamen", array('id_turnamen' => $id))->result();
    }
}
?>