<?php 
 
class Auth extends CI_Controller{
 
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
 
	function index()
	{	
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';

			$this->load->view('admin/header', $data);
			$this->load->view('admin/login');
			$this->load->view('admin/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		
		if ($user[is_active] == 1) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username']
				];				
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-outline alert-danger">Wrong Password!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				redirect('admin/auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-outline alert-danger" >Username is not register!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			redirect('admin/auth');
		}
	}

	function register()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'is_unique' => 'This username has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|max_length[12]|matches[password2]', [
			'matches' => 'Password dont matches!',
			'min_lenght' => 'Password too short!' 
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if( $this->form_validation->run() == false)
		{
			$data['title'] = 'Register Page';

			$this->load->view('admin/header', $data);
			$this->load->view('admin/register');
			$this->load->view('admin/footer');
		} else {

			$data = [
				'username' => htmlspecialchars($this->input->post('username', TRUE)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'image' => 'default.jpg',
				'role_id' => 2,
				'is_active' => 1,	
				'date_create' => time()

			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Congrats, your account can login now!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			redirect('admin/auth');
		}

	}

	function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">You have been logout!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
		redirect('admin/auth');			
	}

}