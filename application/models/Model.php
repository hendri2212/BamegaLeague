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

	public function saveGame($gambar) {
		$data = array(
			"nama_game"		=> $this->input->post('nama_game'),
			"gambar_game"	=> $gambar,
			"deskripsi_game"=> $this->input->post('deskripsi_game')
			// "status_game"=> 1
		);
		$this->db->insert('data_game', $data);
		redirect('content/game');
	}

    public function editGame($id_game) {
        return $this->db->get_where("data_game", array('id_game' => $id_game))->row();
    }

	public function updateGame($id_game, $gambar) {
		$data = array(
			"nama_game"		=> $this->input->post('nama_game'),
			"gambar_game"	=> $gambar,
			"deskripsi_game"=> $this->input->post('deskripsi_game'),
			"status_game"	=> "1"
		);
		$this->db->where('id_game', $id_game);
		$this->db->update('data_game', $data);
		redirect('content/game');
	}

	public function changeGambar($id_game) {
		$this->db->select("gambar_game");
		return $this->db->get_where("data_game", array("id_game" => $id_game))->row();
	}

	// ----------------
	// Data Turnamen
	// ----------------
    public function dataAllTurnamen() {
		$this->db->select('data_turnamen.id_game, id_turnamen, nama_game, tanggal_turnamen, deskripsi, gambar_prize_pool, status_turnamen');
		$this->db->from('data_game');
		$this->db->join('data_turnamen', 'data_game.id_game = data_turnamen.id_game');
		return $this->db->get()->result();
	}
	
	public function AllTurnamenAktif() {
		return $this->db->get_where("data_turnamen", array('status_turnamen' => '1'))->result();
	}

	public function AllTurnamenDetail($id_game) {
		return $this->db->get_where("data_turnamen", array('id_game' => $id_game, 'status_turnamen' => '1'))->result();
	}
	
	public function group() {
		return $this->db->get_where("data_turnamen", array('status_turnamen' => '1'))->result();
	}

	public function detailOneTurnamen($id_turnamen) {
		return $this->db->get_where("data_turnamen", array('id_turnamen' => $id_turnamen))->result();
	}

	public function saveTurnamen($gambar) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"tanggal_turnamen"	=> $this->input->post('tanggal_turnamen'),
			"gambar_prize_pool"	=> $gambar,
			"deskripsi"			=> $this->input->post('deskripsi')
		);
		$this->db->insert('data_turnamen', $data);
		redirect('content/turnamen');
	}

	public function editTurnamen($id_turnamen) {
        return $this->db->get_where("data_turnamen", array('id_turnamen' => $id_turnamen))->row();
	}
	
	public function updateTurnamen($id_turnamen, $gambar) {
		$data = array(
			"tanggal_turnamen"	=> $this->input->post('tanggal_turnamen'),
			"gambar_prize_pool"	=> $gambar,
			"deskripsi"			=> $this->input->post('deskripsi')
		);
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->update('data_turnamen', $data);
		redirect('content/turnamen');
	}

	public function changeGambarTurnamen($id_turnamen) {
		$this->db->select("gambar_prize_pool");
		return $this->db->get_where("data_turnamen", array("id_turnamen" => $id_turnamen))->row();
	}

	// ----------------
	// Data Team
	// ----------------
	public function dataAllTeam() {
		$this->db->select('data_team.id_game, id_team, nama_team, logo_team, deskripsi_team, tanggal_daftar');
		$this->db->from('data_game');
		$this->db->join('data_team', 'data_game.id_game = data_team.id_game');
		return $this->db->get()->result();
	}

	public function saveTeam($gambar) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"nama_team"			=> $this->input->post('nama_team'),
			"logo_team"			=> $gambar,
			"deskripsi_team"	=> $this->input->post('deskripsi_team')
		);
		$this->db->insert('data_team', $data);
		redirect('content/team');
	}

	public function editTeam($id_team) {
		return $this->db->get_where("data_team", array('id_team' => $id_team))->row();
	}

	public function updateTeam($id_team, $gambar) {
		$data = array(
			"nama_team"			=> $this->input->post('nama_team'),
			"deskripsi_team"	=> $this->input->post('deskripsi_team'),
			"logo_team"			=> $gambar
		);
		$this->db->where('id_team', $id_team);
		$this->db->update('data_team', $data);
		redirect('content/team');
	}

	public function changeGambarTeam($id_team) {
		$this->db->select("logo_team");
		return $this->db->get_where("data_team", array("id_team" => $id_team))->row();
	}
	// ----------------
	// Data Login
	// ----------------
	public function cekLogin() {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$akses	= $this->db->get_where("data_login", $data)->row();
		$cek	= $this->db->get_where("data_login", $data)->num_rows();
		
		if($cek > 0) {
			$data_session = array(
				'nama_lengkap'	=> $akses->nama_lengkap,
				'level'			=> $akses->level,
				'status'		=> "success"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url("content/"));
		} else {
			echo "<script>alert('Username atau Password yang Anda masukkan SALAH'); window.location.href='./'</script>";
		}
	}
}
?>