
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MY_Controller extends CI_Controller {

        public function page($content, $data = NULL) {
            $this->load->view('templates/header');
            $data['content'] = $this->load->view($content, $data, TRUE);
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
        }
    }
?>