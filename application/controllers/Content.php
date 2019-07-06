<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {

	public function index(){
		// $data['jum_record'] = $this->model->record();
		// $data['jum_record_k'] = $this->model->record_k();
		// $this->pages('module/home/home', $data);
		$this->page('module/home/home');
	}

	public function detail(){
		$this->page('module/detail/detail');
	}
	
	public function communities(){
		$this->page('module/communities/communities');
	}
}