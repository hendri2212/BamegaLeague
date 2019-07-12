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
		$data['dataTurnamen']	= $this->model->dataTurnamen();
		$this->page('module/home/home', $data);
	}

	public function game() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/game/game', $data);
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
	public function turnamenByID($id_game) {
		$data['dataAllGame'] = $this->model->turnamenByID($id_game);
		// $this->page('module/game/game', $data);
	}
	
	public function turnamen() {
		$this->page('module/input/input_turnamen');
	}
	
	// ----------------
	// Login
	// ----------------
	public function login(){
		$this->page('module/login/login');
	}

	public function detail($id){
		$data['id']=$id;
		$this->page('module/detail/detail',$data);
	}
	
	public function communities(){
		$this->page('module/communities/communities');
	}
	
	public function team(){
		$this->page('module/input/input_team');
	}

	// public function data_turnamen(){
	// 	$data = $this->model->data_turnamen();
	// 	echo $data;
	// }

	// public function data_turnamen_byid(){
	// 	$data = $this->model->data_turnamen_byid();
	// 	echo $data;
	// }
}