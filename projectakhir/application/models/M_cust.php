<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_cust extends CI_Model
{

	public function rulesRegister()
	{
		$rule = [

			[ // aturan untuk Name
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|trim',
				'errors' => ['required' => 'Name field is required']
			],

			[ // aturan untuk email
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|trim|valid_email|is_unique[customers.email]',
				'errors' => [
					'is_unique' => 'This email already used',
					'required' => 'Email field is required'
				]
			],

			[ // aturan untuk password
				'field' => 'password1',
				'label' => 'Password',
				'rules' => 'required|trim|min_length[6]|max_length[30]|matches[password2]|alpha_numeric|password_check[1,1,1]',
				'errors' => [
					'matches' => 'Password not matches',
					'min_length' => 'Password is too short',
					'max_length' => 'Password is too long',
					'required' => 'Password field is required'
				]
			],

			[ // aturan konfirmasi password
				'field' => 'password2',
				'label' => 'Password',
				'rules' => 'required|trim|matches[password1]'
			],

			[ // aturan untuk address
				'field'  => 'address',
				'label'  => 'Address',
				'rules'  => 'required|trim',
				'errors' => ['required' => 'Address field is required']
			],

			[ // aturan untuk city
				'field'  => 'city',
				'label'  => 'City',
				'rules'  => 'required|trim',
				'errors' => ['required' => 'City field is required']
			],

			[ // aturan untuk province
				'field'  => 'province',
				'label'  => 'Province',
				'rules'  => 'required|trim',
				'errors' => ['required' => 'State field is required']
			],

			[ // aturan untuk country
				'field'  => 'country',
				'label'  => 'Country',
				'rules'  => 'required|trim',
				'errors' => ['required' => 'Country field is required']
			],

			[ // aturan untuk zipcode
				'field'  => 'zipcode',
				'label'  => 'Zipcode',
				'rules'  => 'required|trim|numeric',
				'errors' => [
					'required' => 'Zip Code field is required',
					'numeric' => 'Only filled with number'
				]
			],

			[ // aturan untuk name
				'field'  => 'phonenumber',
				'label'  => 'Phone Number',
				'rules'  => 'required|trim|numeric',
				'errors' => [
					'required' => 'Phone Number field is required',
					'numeric' => 'Only filled with number'
				]
			],

			[ // aturan untuk zipcode
				'field'  => 'date_created',
				'label'  => 'Date Created',
				'rules'  => 'trim'
			]

		];
		$this->form_validation->set_rules($rule);
	}

	public function processRegister()
	{
		$email = $this->input->post('email', TRUE);
		$data = [
			'name' => $this->input->post('name', true),
			'email' => $email,
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'address' => $this->input->post('address', true),
			'city' => $this->input->post('city', true),
			'province' => $this->input->post('province', true),
			'country' => $this->input->post('country', true),
			'zipcode' => $this->input->post('zipcode', true),
			'phonenumber' => $this->input->post('phonenumber', true),
			'status' => 0,
			'date_created' => $this->input->post('date_created', true)
		];

		$token = base64_encode(random_bytes(32));
		$customers_token = [
			'email' =>	$email,
			'token' => $token,
			'date_created' => time()
		];

		$this->_sendEmail($token, 'verify');
		$this->db->insert('customers', $data);
		$this->db->insert('customers_token', $customers_token);
	}

	public function processForgotPassword()
	{
		$email = $this->input->post('email', true);
		$customers = $this->db->get_where('customers', ['email' => $email])->row_array();
		if ($customers['status'] == 1) {
			$token = base64_encode(random_bytes(32));
			$customers_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$this->db->insert('customers_token', $customers_token);
			$this->_sendEmail($token, 'forgot');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Please check your inbox/spam email to reset password..</div>');
			redirect('account/forgotpassword');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated.</div>');
			redirect('account/forgotpassword');
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'bogoliyo1@gmail.com',
			'smtp_pass' => 'Mz4inurrofanf01',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n",
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('bogoliyo1@gmail.com', 'SiRantang');
		$this->email->to($this->input->post('email', TRUE));

		if ($type == 'verify') {
			$this->email->subject('SiRantang - Verify Your Account');
			$this->email->message('Click this link to verify your account : 
				<a href="'. base_url() .'account/verify?email='.$this->input->post('email').'&token='.urlencode($token).'")>Active</a>. Activation time for 5 minutes.');
		} elseif ($type == 'forgot') {
			$this->email->subject('SiRantang - Reset Your Account Password');
			$this->email->message('Click this link to reset your account password : 
				<a href="'. base_url() .'account/resetpassword?email='.$this->input->post('email').'&token='.urlencode($token).'")>Active</a>. Reset password time for 24 hours.');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function rulesChangePassword()
	{
		$rule = [
			[ // aturan untuk password
				'field' => 'newpassword1',
				'label' => 'New Password',
				'rules' => 'required|trim|min_length[6]|max_length[30]|matches[newpassword2]|alpha_numeric|password_check[1,1,1]|is_unique[customers.password]',
				'errors' => [
					'matches' => 'Password not matches',
					'min_length' => 'Password is too short',
					'max_length' => 'Password is too long',
					'required' => 'New password field is required'
				]
			],

			[ // aturan konfirmasi password
				'field' => 'newpassword2',
				'label' => 'Confirm Password',
				'rules' => 'required|trim|min_length[6]|max_length[30]',
				'errors' => [
					'required' => 'Confirm password field is required'
				]
			]
		];
		$this->form_validation->set_rules($rule);
	}

	public function changePassword()
	{
		$data = [
			'password' => password_hash($this->input->post('newpassword1'), PASSWORD_DEFAULT)
		];
		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('customers', $data);
	}

	public function editDetails()
	{
		$data = [
			'name' => $this->input->post('name', true),
			'address' => $this->input->post('address', true),
			'city' => $this->input->post('city', true),
			'province' => $this->input->post('province', true),
			'country' => $this->input->post('country', true),
			'zipcode' => $this->input->post('zipcode', true),
			'phonenumber' => $this->input->post('phonenumber', true)
		];

		$this->db->where('email', $this->session->userdata('email'));
		$this->db->update('customers', $data);
	}

	public function rulesLogin()
	{
		$rule =
			[
				[ // aturan untuk email
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|trim',
					'errors' => ['required' => 'Email field is required']
				],

				[ // aturan untuk password
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required|trim',
					'errors' => ['required' => 'Password field is required']
				],
			];
		$this->form_validation->set_rules($rule);
	}


	public function getAllCust()
	{
		return $this->db->get('customers')->result_array();
	}

	public function hapusData($customer_id)
	{
		$this->db->where('customer_id', $customer_id);
		$this->db->delete('customers');
	}

	public function getOrder(){
		$this->db->select('barang.*, order_details.*, order.*');
		$this->db->from('order_details');
		$this->db->join('barang', 'barang.id = order_details.id_barang');
		$this->db->join('order', 'order.id_order = order_details.id_order');
		return $this->db->get()->result_array();
	}

}

/* End of file M_cust.php */
/* Location: ./application/models/M_cust.php */
