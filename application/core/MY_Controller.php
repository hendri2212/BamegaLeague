<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    function page($content, $data = NULL) {
        $data['content'] = $this->load->view($content, $data, TRUE);
        $this->load->view('dashboard', $data);
    }
}