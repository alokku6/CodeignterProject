<?php
use PharIo\Manifest\Library;

defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->has_userdata('authenticated')) {
			$this->session->set_flashdata('status', 'You are already LoggedIn');
			redirect('dashboard');
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('LoginModel');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == true) {
			$data = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			];
			$user = new LoginModel;
			$result = $user->loginUser($data);
			if ($result != false) {
				$auth_details = [
					'name' => $result->name,
					'username' => $result->username

				];
				$this->session->set_userdata('authenticated', '1');
				$this->session->set_userdata('auth_user', $auth_details);
				$this->session->set_flashdata('success', 'You are Successfully Logged in');
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('status', 'Invalid Username or Password');
				$this->index();
			}
		} else {
			$this->index();
		}
	}

}