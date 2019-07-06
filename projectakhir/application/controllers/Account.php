<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cust', 'mocust');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('home');
		}

		$this->mocust->rulesRegister(); //memanggil method rule daftar customers

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login - Register';
			$data['my'] = 'My Account';
			$this->load->view('user/_partials/header', $data);
			$this->load->view('user/_partials/navigation');
			$this->load->view('user/account');
			$this->load->view('user/_partials/footer');
		} else {
			// jika rule terpenuhi
			$this->mocust->processRegister();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your account has been successfully created</div>');
			redirect('account');
		}
	}

	public function Dashboard()
	{
		$data['title'] = 'Dashboard Account';
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		$data['validation_errors'] = $this->session->userdata('validation_errors');
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/_partials/navigation');
		$this->load->view('user/dashboard', $data);
		$this->load->view('user/_partials/footer');
	}

	public function login()
	{
		$this->mocust->rulesLogin(); //memanggil method rule login customers

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login - Register';
			$this->load->view('user/_partials/header', $data);
			$this->load->view('user/_partials/navigation');
			$this->load->view('user/account');
			$this->load->view('user/_partials/footer');
		} else {
			// jika rule terpenuhi
			$this->_processLogin();
		}
	}

	private function _processLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$customers = $this->db->get_where('customers', ['email' => $email])->row_array();

		if ($customers) {
			if ($customers['status'] == 1) {
				if (password_verify($password, $customers['password'])) {
					$data = [
						'email' => $customers['email'],
						'name' => $customers['name']
					];

					$this->session->set_userdata($data);
					redirect('account');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong password!</div>');
					redirect('account');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">your email has not been verified</div>');
				redirect('account');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">your account has not been registered</div>');
			redirect('account');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		redirect('account');
	}

	function editDetails()
	{
		$this->mocust->editDetails();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your account has been successfully edited</div>');
		redirect('account/dashboard');
	}

	function changePassword()
	{
		$this->mocust->rulesChangePassword(); //memanggil method rule
		$customers = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		$password = $this->input->post('oldpassword');

		if (password_verify($password, $customers['password'])) {
			if ($this->form_validation->run() == false) {
				$this->session->set_userdata('validation_errors', $this->form_validation->error_array());
				$this->session->mark_as_flash('validation_errors', $this->form_validation->error_array()); // data will automatically delete themselves after redirect
				redirect('account/dashboard#edit-password');
			} else {
				$this->mocust->changePassword();
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Your password has been successfully changed</div>');
				redirect('account/dashboard');
			}
		} else {
			$this->session->set_flashdata('moldpass', ' <small class="text-danger pl-2">Your old password is incorrect</small>');
			redirect('account/dashboard#edit-password');
		}
	}
}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */
