<?php
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends REST_Controller
{
    public function index_get()
    {
        $email = $this->get('email');
        $sandi = $this->get('password');
        $user = $this->db->get_where('customers', ['email' => $email])->row_array();
        if ($user != null) {
            if (password_verify($sandi, $user['password'])) {
                $data = [
                    'email'         => $user['email'],
                    'customer_id'   => $user['customer_id']
                ];
                $this->response([
                    'status'    => true,
                    'message'   => 'Sukses Login',
                    'login'     => $data
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'data not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
}
