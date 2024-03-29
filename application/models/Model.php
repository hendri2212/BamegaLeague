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
	
	public function updateGame($id_game) {
		$data = array(
			"nama_game"		=> $this->input->post('nama_game'),
			"deskripsi_game"=> $this->input->post('deskripsi_game'),
			"status_game"	=> "1"
		);
		$this->db->where('id_game', $id_game);
		$this->db->update('data_game', $data);
		redirect('content/game');
	}

	public function updateGame1($id_game, $gambar) {
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

	public function deleteGame($id_game) {
		$this->db->where('id_game', $id_game);
		$this->db->delete('data_game');
		redirect('content/game');
	}

	// ----------------
	// Data Turnamen
	// ----------------
    public function dataAllTurnamen() {
		$this->db->select('data_turnamen.id_game, id_turnamen, nama_game, nama_turnamen, tanggal_turnamen, deskripsi, gambar_prize_pool, gambar_turnamen, status_turnamen');
		$this->db->from('data_turnamen');
		$this->db->join('data_game', 'data_game.id_game = data_turnamen.id_game');
		return $this->db->get()->result();
	}
	
	public function AllTurnamenAktif() {
		return $this->db->get_where("data_turnamen", array('status_turnamen >' => '0'))->result();
	}

	public function AllTurnamenDetail($id_game) {
		return $this->db->get_where("data_turnamen", array('id_game' => $id_game, 'status_turnamen >' => '0'))->result();
	}
	
	public function group() {
		return $this->db->get_where("data_turnamen", array('status_turnamen' => '1'))->result();
	}

	public function detailOneTurnamen($id_turnamen) {
		$this->db->select('*,SUM(nilai_rank + nilai_kill + nilai_point) as total');
		$this->db->join('data_nilai', 'data_turnamen.id_turnamen = data_nilai.id_turnamen');
		return $this->db->get_where("data_turnamen", array('data_turnamen.id_turnamen' => $id_turnamen))->result();
	}

	public function detailOneTurnamenLimit($id_turnamen){
		$this->db->select('*, SUM(nilai_rank + nilai_kill + nilai_point) as total');
		$this->db->join('data_team', 'data_team.id_team = data_nilai.id_team');
		$this->db->join('data_turnamen', 'data_turnamen.id_turnamen = data_nilai.id_turnamen');
		$this->db->group_by('data_nilai.id_team');
		$this->db->order_by('total' , 'DESC');
		$this->db->limit(3);
		return $this->db->get_where("data_nilai", array('data_turnamen.id_turnamen' => $id_turnamen))->result();
	}

	public function detailOneTurnamenTeam($id_turnamen) {
		$this->db->select('*');
		$this->db->from('data_team');
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->join('data_team_turnamen', 'data_team_turnamen.id_team = data_team.id_team');
		return $this->db->get()->result();
	}

	public function saveTurnamen($gambar, $gambar1) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"nama_turnamen"		=> $this->input->post('nama_turnamen'),
			"tanggal_turnamen"	=> $this->input->post('tanggal_turnamen'),
			"gambar_turnamen"	=> $gambar1,
			"gambar_prize_pool"	=> $gambar,
			"deskripsi"			=> $this->input->post('deskripsi')
		);
		$this->db->insert('data_turnamen', $data);
		redirect('content/turnamen');
	}

	public function editTurnamen($id_turnamen) {
		$this->db->select('data_turnamen.id_game, id_turnamen, nama_game, nama_turnamen, tanggal_turnamen, deskripsi, gambar_turnamen, gambar_prize_pool, status_turnamen');
		$this->db->join('data_game', 'data_game.id_game = data_turnamen.id_game');
        return $this->db->get_where("data_turnamen", array('id_turnamen' => $id_turnamen))->row();
	}
	
	public function updateTurnamen($id_turnamen) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"nama_turnamen"		=> $this->input->post('nama_turnamen'),
			"tanggal_turnamen"	=> $this->input->post('tanggal_turnamen'),
			"deskripsi"			=> $this->input->post('deskripsi'),
			"status_turnamen"	=> $this->input->post('status_turnamen')
		);
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->update('data_turnamen', $data);
		redirect('content/turnamen');
	}

	public function updateTurnamen1($id_turnamen, $gambar_prize_pool) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"nama_turnamen"		=> $this->input->post('nama_turnamen'),
			"tanggal_turnamen"	=> $this->input->post('tanggal_turnamen'),
			"gambar_prize_pool"	=> $gambar_prize_pool,
			"deskripsi"			=> $this->input->post('deskripsi'),
			"status_turnamen"	=> $this->input->post('status_turnamen')
		);
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->update('data_turnamen', $data);
		redirect('content/turnamen');
	}

	public function updateTurnamen2($id_turnamen, $gambar_turnamen) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"nama_turnamen"		=> $this->input->post('nama_turnamen'),
			"tanggal_turnamen"	=> $this->input->post('tanggal_turnamen'),
			"gambar_turnamen"	=> $gambar_turnamen,
			"deskripsi"			=> $this->input->post('deskripsi'),
			"status_turnamen"	=> $this->input->post('status_turnamen')
		);
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->update('data_turnamen', $data);
		redirect('content/turnamen');
	}

	public function updateTurnamen3($id_turnamen, $gambar_prize_pool, $gambar_turnamen) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"nama_turnamen"		=> $this->input->post('nama_turnamen'),
			"tanggal_turnamen"	=> $this->input->post('tanggal_turnamen'),
			"gambar_turnamen"	=> $gambar_turnamen,
			"gambar_prize_pool"	=> $gambar_prize_pool,
			"deskripsi"			=> $this->input->post('deskripsi'),
			"status_turnamen"	=> $this->input->post('status_turnamen')
		);
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->update('data_turnamen', $data);
		redirect('content/turnamen');
	}

	public function changeAllGambarTurnamen($id_turnamen) {
		$this->db->select("gambar_prize_pool, gambar_turnamen");
		return $this->db->get_where("data_turnamen", array("id_turnamen" => $id_turnamen))->row();
	}

	public function changeGambarPrizePoolTurnamen($id_turnamen) {
		$this->db->select("gambar_prize_pool");
		return $this->db->get_where("data_turnamen", array("id_turnamen" => $id_turnamen))->row();
	}

	public function changeGambarTurnamen($id_turnamen) {
		$this->db->select("gambar_turnamen");
		return $this->db->get_where("data_turnamen", array("id_turnamen" => $id_turnamen))->row();
	}

	public function deleteTurnamen($id_turnamen) {
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->delete('data_turnamen');
		redirect('content/turnamen');
	}
	
	public function dataAllTeamTurnamen($id_game) {
		$this->db->join('data_team', 'data_team.id_team = data_team_turnamen.id_team');
		return $this->db->get_where('data_team_turnamen', array('data_team_turnamen.id_game' => $id_game))->result();
	}

	public function cekDataTeamTurnamen($id_turnamen){
		$data = array(
			"id_turnamen" => $id_turnamen
		);
		return $this->db->get_where("data_team_turnamen", $data)->row();
	}
	
	public function ikutiTurnamen($id_turnamen, $id_game){
		$data = array(
			"id_turnamen"	=> $id_turnamen,
			"id_team"		=> $this->input->post('id_team'),
			"id_game"		=> $id_game,
		);
		$this->db->insert('data_team_turnamen', $data);
		redirect('content/detailTurnamen/'.$id_turnamen.'/'.$id_game);
	}

	public function tidakIkutiTurnamen($id_turnamen, $id_team, $id_game){
		$this->db->where('id_turnamen', $id_turnamen);
		$this->db->where('id_team', $id_team);
		$this->db->where('id_game', $id_game);
		$this->db->delete('data_team_turnamen');
		redirect('content/detailTurnamen/'.$id_turnamen.'/'.$id_game);
	}
	
	// ----------------
	// Data Team
	// ----------------

	public function dataTeam($id_game) {
		$this->db->where('id_game', $id_game);
		return $this->db->get('data_team')->result();
	}

	public function dataAllTeam() {
		$this->db->select('data_team.id_game, id_team, nama_game, nama_team, logo_team, deskripsi_team, tanggal_daftar');
		$this->db->from('data_game');
		$this->db->join('data_team', 'data_game.id_game = data_team.id_game');
		return $this->db->get()->result();
	}

	public function detailOneTeamPemain($id_team) {
		$this->db->select('*');
		$this->db->from('data_pemain');
		$this->db->where('data_team_pemain.id_team', $id_team);
		$this->db->join('data_team_pemain', 'data_team_pemain.id_pemain = data_pemain.id_pemain');
		return $this->db->get()->result();
	}

	public function ikutiTeam($id_team){
		$data = array(
			"id_team"		=> $id_team,
			"id_pemain"		=> $this->input->post('id_pemain'),
		);
		$this->db->insert('data_team_pemain', $data);
		redirect('content/detailTeam/'.$id_team);
	}

	public function tidakIkutiTeam($id_team, $id_pemain){
		$this->db->where('id_team', $id_team);
		$this->db->where('id_pemain', $id_pemain);
		$this->db->delete('data_team_pemain');
		redirect('content/detailTeam/'.$id_team);
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
		$this->db->select('data_team.id_game, id_team, nama_game, nama_team, logo_team, deskripsi_team, tanggal_daftar');
		$this->db->join('data_game', 'data_game.id_game = data_team.id_game');
		return $this->db->get_where("data_team", array('id_team' => $id_team))->row();
	}

	public function updateTeam($id_team) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
			"nama_team"			=> $this->input->post('nama_team'),
			"deskripsi_team"	=> $this->input->post('deskripsi_team')
		);
		$this->db->where('id_team', $id_team);
		$this->db->update('data_team', $data);
		redirect('content/team');
	}

	public function updateTeam1($id_team, $gambar) {
		$data = array(
			"id_game"			=> $this->input->post('id_game'),
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

	public function deleteTeam($id_team) {
		$this->db->where('id_team', $id_team);
		$this->db->delete('data_team');
		redirect('content/team');
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
	// ----------------
	// Data Komunitas
	// ----------------
	public function dataAllCommunities() {
		$json = [];
		$this->db->select('id_pemain, kode_pemain, nama_pemain, foto_pemain, no_handphone, alamat');
		$this->db->from('data_pemain');
		return $json = $this->db->get()->result();
	}

	public function cekDataTeamPemain($id_pemain){
		$data = array(
			"id_pemain" => $id_pemain
		);
		return $this->db->get_where("data_team_pemain", $data)->row();
	}

	public function detailCommunities($id_pemain) {
			$this->db->select('*');
			$this->db->join('data_pemain', 'data_team_pemain.id_pemain = data_pemain.id_pemain');
			$this->db->join('data_team', 'data_team.id_team = data_team.id_team');
			return $this->db->get_where("data_team_pemain", array('data_team_pemain.id_pemain' => $id_pemain))->row();
	}

	public function detailCommunitiesNoTeam($id_pemain) {
		$this->db->select('*');
		return $this->db->get_where("data_pemain", array('id_pemain' => $id_pemain))->row();
}

	public function search(){
		$keyword = $this->input->post('keyword');
		$this->db->select('*');
		$this->db->from('data_pemain');
		$this->db->like('nama_pemain', $keyword);
		return $this->db->get()->result();
	}
	// ----------------
	// Data Pemain
	// ----------------
	public function savePemain($gambar) {
		$data = array(
			"kode_pemain"	=> $this->input->post('kode_pemain'),
			"nama_pemain"	=> $this->input->post('nama_pemain'),
			"no_handphone"	=> $this->input->post('no_handphone'),
			"alamat"		=> $this->input->post('alamat'),
			"foto_pemain"	=> $gambar
		);
		$this->db->insert('data_pemain', $data);
		if(empty($this->session->userdata('level'))){
			redirect('content/communities');
		}else{
			redirect('content/pemain');
		}
	}

	public function editPemain($id_pemain) {
		$this->db->select('id_pemain, kode_pemain, nama_pemain, foto_pemain, no_handphone, alamat');
		return $this->db->get_where("data_pemain", array('id_pemain' => $id_pemain))->row();
	}

	public function updatePemain($id_pemain) {
		$data = array(
			"kode_pemain"	=> $this->input->post('kode_pemain'),
			"nama_pemain"	=> $this->input->post('nama_pemain'),
			"no_handphone"	=> $this->input->post('no_handphone'),
			"alamat"		=> $this->input->post('alamat')
		);
		$this->db->where('id_pemain', $id_pemain);
		$this->db->update('data_pemain', $data);
		redirect('content/pemain');
	}

	public function updatePemain1($id_pemain, $gambar) {
		$data = array(
			"kode_pemain"	=> $this->input->post('kode_pemain'),
			"nama_pemain"	=> $this->input->post('nama_pemain'),
			"no_handphone"	=> $this->input->post('no_handphone'),
			"alamat"		=> $this->input->post('alamat'),
			"foto_pemain"	=> $gambar
		);
		$this->db->where('id_pemain', $id_pemain);
		$this->db->update('data_pemain', $data);
		redirect('content/pemain');
	}

	public function changeGambarPemain($id_pemain) {
		$this->db->select("foto_pemain");
		return $this->db->get_where("data_pemain", array("id_pemain" => $id_pemain))->row();
	}

	public function deletePemain($id_pemain) {
		$this->db->where('id_pemain', $id_pemain);
		$this->db->delete('data_pemain');
		redirect('content/pemain');
	}
	// ----------------
	// Data Nilai
	// ----------------

	public function dataNilai() {
		$this->db->select('data_nilai.id_team, id_nilai, data_group.id_group, data_nilai.id_match, data_nilai.id_turnamen, nama_team, nama_turnamen, nama_group, nama_match, nilai_rank, nilai_kill, nilai_point');
		$this->db->from('data_nilai');
		$this->db->join('data_team', 'data_team.id_team = data_nilai.id_team');
		$this->db->join('data_group', 'data_group.id_group = data_nilai.id_group');
		$this->db->join('data_match', 'data_match.id_match = data_nilai.id_match');
		$this->db->join('data_turnamen', 'data_turnamen.id_turnamen = data_nilai.id_turnamen');
		$this->db->group_by('id_nilai', 'id_team');
		return $this->db->get()->result();
	}

	public function saveNilai() {
		$data = array(
			"id_turnamen"	=> $this->input->post('id_turnamen'),
			"id_team"		=> $this->input->post('id_team'),
			"id_group"		=> $this->input->post('id_group'),
			"id_match"		=> $this->input->post('id_match'),
			"nilai_rank"	=> $this->input->post('nilai_rank'),
			"nilai_kill"	=> $this->input->post('nilai_kill'),
			"nilai_point"	=> $this->input->post('nilai_point'),
		);
		$this->db->insert('data_nilai', $data);
		redirect('content/nilai');
	}

	public function editNilai($id_nilai) {
		$this->db->select('data_nilai.id_team, id_nilai, data_nilai.id_group, data_nilai.id_match, data_nilai.id_turnamen, nama_team, nama_turnamen, nama_group, nama_match, nilai_rank, nilai_kill, nilai_point');
		$this->db->join('data_team', 'data_team.id_team = data_nilai.id_team');
		$this->db->join('data_group', 'data_group.id_group = data_nilai.id_group');
		$this->db->join('data_match', 'data_match.id_match = data_nilai.id_match');
		$this->db->join('data_turnamen', 'data_turnamen.id_turnamen = data_nilai.id_turnamen');
		return $this->db->get_where("data_nilai", array('id_nilai' => $id_nilai))->row();
	}

	public function updateNilai($id_nilai) {
		$data = array(
			"id_turnamen"	=> $this->input->post('id_turnamen'),
			"id_team"		=> $this->input->post('id_team'),
			"id_group"		=> $this->input->post('id_group'),
			"id_match"		=> $this->input->post('id_match'),
			"nilai_rank"	=> $this->input->post('nilai_rank'),
			"nilai_kill"	=> $this->input->post('nilai_kill'),
			"nilai_point"	=> $this->input->post('nilai_point'),
		);
		$this->db->where('id_nilai', $id_nilai);
		$this->db->update('data_nilai', $data);
		redirect('content/nilai');
	}

	public function deleteNilai($id_nilai) {
		$this->db->where('id_nilai', $id_nilai);
		$this->db->delete('data_nilai');
		redirect('content/nilai');
	}
	// ----------------
	// Data Group
	// ----------------
	public function dataAllGroup() {
        return $this->db->get("data_group")->result();
    }
	// ----------------
	// Data Match
	// ----------------
	public function dataAllMatch() {
        return $this->db->get("data_match")->result();
	}
	// ----------------
	// Data Admin
	// ----------------

	public function dataAllLogin(){
		if($this->session->userdata('level') == 1){
			$this->db->select('*');
			$this->db->from('data_login');
			return $this->db->get()->result();
		}else{
			$this->db->select('*');
			$this->db->from('data_login');
			$this->db->where('level','2');
			return $this->db->get()->result();
		}
	}

	public function inputAdmin(){
		$this->page('module/admin/inputAdmin');
	}

	public function saveAdmin(){
		$data= array(
			"nama_lengkap"	=> $this->input->post('nama_lengkap'),
			"username"		=> $this->input->post('username'),
			"password"		=> md5($this->input->post('password')),
			"level"			=> '2'
		);

		$this->db->insert('data_login', $data);
		redirect('content/admin');
	}

	public function editAdmin($id_user) {
		return $this->db->get_where("data_login", array('id_user' => $id_user))->row();
	}

	public function updateAdmin($id_user) {
		$data = array(
			"nama_lengkap"  => $this->input->post('nama_lengkap'),
			"username"		=> $this->input->post('username')
		);
		$this->db->where('id_user', $id_user);
		$this->db->update('data_login', $data);
		redirect('content/admin');
	}

	public function updateAdminPassword($id_user, $password) {
		$data = array(
			"nama_lengkap"  => $this->input->post('nama_lengkap'),
			"username"		=> $this->input->post('username'),
			"password"		=> md5($this->input->post('password'))
		);
		$this->db->where('id_user', $id_user);
		$this->db->update('data_login', $data);
		redirect('content/admin');
	}

	public function deleteAdmin($id_user) {
		$this->db->where('id_user', $id_user);
		$this->db->delete('data_login');
		redirect('content/admin');
	}
}
?>