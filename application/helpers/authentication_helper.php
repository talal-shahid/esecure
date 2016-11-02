<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function authenticate($session){
	if(isset($session['email']) && isset($session['token'])){
		$CI =& get_instance();
		$CI->load->model('main_model','mm');
		$token = $CI->mm->get_token($session['email']);
		if($token==$session['token']){
			return true;
		}
		return false;	
	}
	return false;
	
}