<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('main_model','mm');
        session_start();
    }

	public function index(){
		$this->load->view('main');
	}

	public function secure(){
		if(isset($_POST['text']) && !empty($_POST['text'])){
			$data = array(
					'text' => base64_encode(MCRYPT_IV.mcrypt_encrypt(MCRYPT_RIJNDAEL_128, MCRYPT_KEY,$_POST['text'], MCRYPT_MODE_CBC, MCRYPT_IV)),
					'datetime' => date("Y-m-d H:m:i"),
					'unique_id' => substr(md5(microtime()*rand(0,9999)),0,10),
					'ip' => $_SERVER['REMOTE_ADDR'],
					'used' => 0 
				);
			$this->mm->save($data);
			$response = array();
			$response['status'] = true;
			$response['message'] = 'Text encryption successfull.';
			$response['link'] = base_url().'main/access/'.$data['unique_id'];
			$response['datetime'] = date('d M Y H:s', strtotime($data['datetime']));
			$response['used'] = 'No';
			$response['text_id'] = $data['unique_id'];
		}
		else{
			$response = array();
			$response['status'] = false;
			$response['message'] = 'Please insert some text.';
		}
		echo json_encode($response);
	}

	public function access($unique_id=0){
		if(isset($unique_id) && !empty($unique_id)){
			$data['content'] = $this->mm->get($unique_id);
			if(isset($data['content']) && !empty($data['content'])){	
				$ciphertext_dec = base64_decode($data['content']['text']);
			    $iv_dec = substr($ciphertext_dec, 0, MCRYPT_KEY_IV_SIZE);
	     		$ciphertext_dec = substr($ciphertext_dec, MCRYPT_KEY_IV_SIZE);
			    $data['content']['text'] = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, MCRYPT_KEY,$ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);	
			}
		}
		$this->load->view('content',$data);
	}

	public function login(){
		if(!authenticate($_SESSION)){
        	$this->load->view('admin/login');
        }
        else{
        	redirect('admin');
        }
		
	}


	public function authenticate(){
		if(isset($_POST['email_address']) && isset($_POST['password'])){
			if($this->mm->authenticate($_POST)){
				$response=array();
				$response['status']=true;
				$_SESSION['email'] = $_POST['email_address'];
				$_SESSION['token'] = hash('sha512',$_POST['email_address'].$_POST['password']);
				$this->mm->update_admin($_POST['email_address'],array('token'=>$_SESSION['token']));
				$response['message']='Login successfull. Redirecting you to dashboard.';
			}
			else{
				$response['status']=false;
				$response['message']='Login failed. Please try again.';	
			}
		}
		else{
			$response['status']=false;
			$response['message']='Login failed. Please enter all details properly.';	
		}
		echo json_encode($response);
	}
}
