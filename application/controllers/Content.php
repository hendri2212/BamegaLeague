<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {

	public function index() {
		$data['dataGame'] = $this->model->dataGame();
		$this->page('module/home/home', $data);
	}
	
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

	public function game(){
		$this->page('module/input/input_game');
	}
	
	public function turnamen(){
		$this->page('module/input/input_turnamen');
	}
	
	public function team(){
		$this->page('module/input/input_team');
	}

	public function data_turnamen(){
		$data = $this->model->data_turnamen();
		echo $data;
	}

	public function data_turnamen_byid(){
		$data = $this->model->data_turnamen_byid();
		echo $data;
	}
}