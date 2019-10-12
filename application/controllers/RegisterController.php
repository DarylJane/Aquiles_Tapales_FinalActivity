<?php 

class RegisterController extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('RegisterModel');
	}


	function index(){
		$this->load->view('register');
	}

	function validation(){
		$this->form_validation->set_rules('user_name','Name','required|trim');
		$this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[
			codeigniter_register.email]');
		$this->form_validation->set_rules('user_password','Password','required');
			if($ths->form_validation->run())
			{
				$verification_key = md5(rand());
				$encrypted_password  $this->encrypt->encode($this->
					input->post('user_password'));
				$data = array(
					'name' 			=> $this->input->post('user_name'),
					'email'			=> $this->input->post('user_email'),
					'password'		=> $encrypted_password,
					'verification_key'	=> $verification_key
				);
				$id = $this->RegisterModel->insert($data);
				if($id > 0)
				{
					$subject = "Please verify email for login";
					$message = "
					<p>Verify Email <a href='".base_url()."RegisterController/verify_email/".$verification_key."'></a>.</p>";
					$config = array(

						'protocol'		=> 'smtp',
						'smtp_host'		=> 'smtp.secureserver.net',
						'smtp_port'		=> 80,
						'smtp_user'		=> 'xxxxxx',
						'smtp_pass'		=> 'xxxxxx',
						'mailtype'		=> 'html',
						'charset'		=> 'iso-8859-1',
						'wordwrap'		=> TRUE
					);
					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					$this->email->from('info@webslesson.info');
					$this->email->to($this->input->post('user_email'));
					$this->email->subject($subject);
					$this->email->message($message);
					if($this->email->send())
					{
						$this->session->set_flashdata('message', 'Check email for verificatiob mail');
						redirect('RegisterController');
					}
				}
			}
			else
			{
				$this->index();
			}
	}


	function verify_email()
	{
		if($this->uri->segment(3))
		{
			$verification_key = $this->uri->segment(3);
			if($this->RegisterModel->verify_email($verification_key))
			{
				$data['message'] = '<h1> Email verified. Log In here <a href="'.base_url().'login"></a></h1>'
			}
			else
			{
				$data['message'] = '<h1> Invalid </h1>';
			}
			$this->load->view('email_verification', $data);
		}
	}

}
?>