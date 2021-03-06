<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form','html','security'));
		$this->load->model(array('model_eoiform','model_account'));
		$this->load->library(['form_validation','session']);
		$this->load->helper('base64url');
		$this->load->helper('kripto');
		$this->load->library('security');
		$this->load->library('encrypt');
		date_default_timezone_set("Asia/Jakarta");

		//check session
		if ($this->session->userdata('en_email')) {
			$qemail= base64url_decode($this->session->userdata('en_email'));
			$userInfo = $this->model_account->getUserInfoByEmail($qemail);  
				if(count($userInfo)<1){
				 redirect('landing');
				}
		}else{
				redirect('landing');
		}

	}
	
	function index(){
			
		$this->load->helper('url');
		$a['page']	= "view_home";
		$this->load->view('index',$a);
	}
}
