<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->library('pagination');
		$this->load->model('Model'); // Load model ke controller ini
	}

	// ----------------
	// Data Game
	// ----------------
	public function index() {
		$data['dataGame']		= $this->model->dataGame();
		$data['AllTurnamenAktif']= $this->model->AllTurnamenAktif();
		$this->page('module/home/home', $data);
	}

	public function game() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/game/game', $data);
	}

	public function inputGame() {
		$this->page('module/game/inputGame');
	}

	public function editGame($id_game) {
		$data['editGame'] = $this->model->editGame($id_game);
		$this->page('module/game/editGame', $data);
	}

	public function updateGame($id_game) {
		$config['upload_path']   = './assets/gambar/game/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar_game');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->updateGame($id_game);
		} else {
			$cek = $this->model->changeGambar($id_game);

			$remove_image = "./assets/gambar/game/".$cek->gambar_game;
			unlink($remove_image);
			
			$this->model->updateGame($id_game, $gambar);
		}
	}

	public function group($id_game) {
		$data['dataGame']			= $this->model->dataGame();
		$data['AllTurnamenDetail']	= $this->model->AllTurnamenDetail($id_game);
		$this->page('module/group/group', $data);
	}

	public function saveGame() {
		$config['upload_path']   = './assets/gambar/game/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar_game');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->saveGame();
		} else {
			$this->model->saveGame($gambar);
		}
	}
	public function deleteGame($id_game){
		$cek = $this->model->changeGambar($id_game);
		$remove_image = "./assets/gambar/game/".$cek->gambar_game;
		unlink($remove_image);
		$this->model->deleteGame($id_game);
	}

	public function enableGame($id_game) {
		$data = $this->model->enableGame($id_game);
	}

	public function disableGame($id_game) {
		$data = $this->model->disableGame($id_game);
	}

	// ----------------
	// Data Turnamen
	// ----------------
	public function turnamen() {
		$data['dataAllTurnamen']= $this->model->dataAllTurnamen();
		$this->page('module/turnamen/turnamen', $data);
	}

	public function inputTurnamen() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/turnamen/inputTurnamen', $data);
	}

	public function detailOneTurnamen($id_turnamen) {
		$data['detailOneTurnamen']= $this->model->detailOneTurnamen($id_turnamen);
		$this->page('module/detail/detail',$data);
	}

	public function saveTurnamen() {
		$config['upload_path']   = './assets/gambar/turnamen/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar_prize_pool');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->saveTurnamen();
		} else {
			$this->model->saveTurnamen($gambar);
		}
	}

	public function editTurnamen($id_turnamen) {
		$data['editTurnamen'] = $this->model->editTurnamen($id_turnamen);
		$this->page('module/turnamen/editTurnamen', $data);
	}

	public function updateTurnamen($id_turnamen) {
		$config['upload_path']   = './assets/gambar/turnamen/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar_prize_pool');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->updateturnamen($id_turnamen);
		} else {
			$cek = $this->model->changeGambarTurnamen($id_turnamen);

			$remove_image = "./assets/gambar/turnamen/".$cek->gambar_prize_pool;
			unlink($remove_image);
			
			$this->model->updateTurnamen($id_turnamen, $gambar);
		}
	}

	public function deleteTurnamen($id_turnamen){
		$cek = $this->model->changeGambarTurnamen($id_turnamen);
		$remove_image = "./assets/gambar/turnamen/".$cek->gambar_prize_pool;
		unlink($remove_image);
		$this->model->deleteTurnamen($id_turnamen);
	}

	// ----------------
	// Data Team
	// ----------------
	public function team() {
		$data['dataAllTeam'] = $this->model->dataAllTeam();
		$this->page('module/team/team', $data);
	}

	public function inputTeam() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/team/inputTeam', $data);
	}

	public function saveTeam() {
		$config['upload_path']   = './assets/gambar/team/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('logo_team');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->saveTeam();
		} else {
			$this->model->saveTeam($gambar);
		}
	}

	public function editTeam($id_team) {
		$data['editTeam'] = $this->model->editTeam($id_team);
		$this->page('module/team/editTeam', $data);
	}

	public function updateTeam($id_team) {
		$config['upload_path']   = './assets/gambar/team/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('logo_team');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->updateteam($id_team);
		} else {
			$cek = $this->model->changeGambarTeam($id_team);

			$remove_image = "./assets/gambar/team/".$cek->logo_team;
			unlink($remove_image);
			
			$this->model->updateTeam($id_team, $gambar);
		}
	}

	public function deleteTeam($id_team){
		$cek = $this->model->changeGambarTeam($id_team);
		$remove_image = "./assets/gambar/team/".$cek->logo_team;
		unlink($remove_image);
		$this->model->deleteTeam($id_team);
	}
	// ----------------
	// Login
	// ----------------
	public function login(){
		$this->page('module/login/login');
	}

	public function cekLogin(){
		$this->model->cekLogin();
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect (base_url('./'));
	}
	
	// ----------------
	// Data Komunitas
	// ----------------
	public function communities(){
		$data['dataAllCommunities'] = $this->model->dataAllCommunities();
		$this->page('module/communities/communities', $data);
	}

	public function detailCommunities($id_pemain) {
		$data['detailCommunities'] = $this->model->detailCommunities($id_pemain);
		$this->page('module/communities/detailCommunities', $data);
	}

	// ----------------
	// Data Pemain
	// ----------------
	public function pemain(){
		$data['dataAllCommunities'] = $this->model->dataAllCommunities();
		$this->page('module/pemain/pemain', $data);
	}

	public function inputPemain() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/pemain/inputPemain', $data);
	}

	public function savePemain() {
		$config['upload_path']   = './assets/gambar/pemain/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('foto_pemain');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->savePemain();
		} else {
			$this->model->savePemain($gambar);
		}
	}

	public function editPemain($id_pemain) {
		$data['editPemain'] = $this->model->editPemain($id_pemain);
		$this->page('module/pemain/editPemain', $data);
	}

	public function updatePemain($id_pemain) {
		$config['upload_path']  = './assets/gambar/pemain/';
		$config['allowed_types']= 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('foto_pemain');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->updatePemain($id_pemain);
		} else {
			$cek = $this->model->changeGambarPemain($id_pemain);

			$remove_image = "./assets/gambar/pemain/".$cek->foto_pemain;
			unlink($remove_image);
			
			$this->model->updatePemain($id_pemain, $gambar);
		}
	}

	public function deletePemain($id_pemain){
		$cek = $this->model->changeGambarPemain($id_pemain);
		$remove_image = "./assets/gambar/pemain/".$cek->foto_pemain;
		unlink($remove_image);
		$this->model->deletePemain($id_pemain);
	}

	// ----------------
	// Data Nilai
	// ----------------

	public function nilai(){
		$data['dataNilai'] = $this->model->dataNilai();
		$this->page('module/nilai/nilai', $data);
	}
}