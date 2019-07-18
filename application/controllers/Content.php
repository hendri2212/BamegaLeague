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

	// ----------------
	// Data Team
	// ----------------
	public function team() {
		$this->page('module/team/team');
	}

	public function inputTeam() {
		$this->page('module/team/inputTeam');
	}

	public function inputTurnamen() {
		$this->page('module/turnamen/inputTurnamen');
	}

	// ----------------
	// Login
	// ----------------
	public function login(){
		$this->page('module/login/login');
	}

	// public function detail($id){
	// 	$data['id']=$id;
	// 	$this->page('module/detail/detail',$data);
	// }
	
	// ----------------
	// Data Komunitas
	// ----------------
	public function communities(){
		$this->page('module/communities/communities');
	}
	
	// public function team(){
	// 	$this->page('module/input/input_team');
	// }

	// public function data_turnamen(){
	// 	$data = $this->model->data_turnamen();
	// 	echo $data;
	// }

	// public function data_turnamen_byid(){
	// 	$data = $this->model->data_turnamen_byid();
	// 	echo $data;
	// }
}