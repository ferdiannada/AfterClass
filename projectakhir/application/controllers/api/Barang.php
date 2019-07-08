<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Barang extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_api', 'barang');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id == null) {
            $barang = $this->barang->getBarang();
        } else {
            $barang = $this->barang->getBarang($id);
        }

        if ($barang) {
            $this->response([
                    'status' => true,
                    'barang' => $barang
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
