<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {

	public function __construct(){
		parent::__construct();
        // $this->load->library('pagination');
		// $this->load->model('model'); // Load model ke controller ini
	}

	public function index(){
		// $data['jum_record'] = $this->model->record();
		// $data['jum_record_k'] = $this->model->record_k();
		// $this->pages('module/home/home', $data);
		$this->pages('module/home/home');
    }
}