<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	// ----------------
	// Data Game
	// ----------------
    public function dataGame() {
        return $this->db->get_where("data_game", array('status_game' => '1'))->result();
    }

    public function dataAllGame() {
        return $this->db->get("data_game")->result();
    }

    public function enableGame($id_game) {
		$data = array(
			"status_game" => '1'
		);
		$this->db->where('id_game', $id_game);
		$this->db->update('data_game', $data);
		redirect('content/game');
    }

    public function disableGame($id_game) {
		$data = array(
			"status_game" => '0'
		);
		$this->db->where('id_game', $id_game);
		$this->db->update('data_game', $data);
		redirect('content/game');
    }

    public function data_turnamen() {
        return $this->db->get("data_turnamen")->result();
    }

    public function data_turnamen_byid($id) {
        return $this->db->get_where("data_turnamen", array('id_turnamen' => $id))->result();
    }
}
?>