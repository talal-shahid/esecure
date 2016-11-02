<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('main_model','mm');
        session_start();
        if(!authenticate($_SESSION)){
        	redirect(base_url().'main/login');
        }
    }

	public function index(){
        $data['security_texts'] = $this->mm->get();
		$this->load->view('admin/dashboard',$data);
	}

    public function logout(){
        unset($_SESSION['token']);
        redirect('admin');
    }
}
