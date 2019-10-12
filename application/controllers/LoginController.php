<?php

class LoginController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('LoginModel');

		}

	function index()
	{
		$this->load->view('login');
	}

	form_validation()
	{
		$this->form_validation->set_rules('user_email','Email','required|trim|valid_email');
		$this->form_validation->set_rules('user_password','Password','required');
		if($this->validation->run())
		{

		}
		else
			$this-index();

	}

}
 ?>