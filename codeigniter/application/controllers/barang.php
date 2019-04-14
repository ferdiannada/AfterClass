<?php

    class barang extends CI_Controller {

        function index(){

            $this->load->model("m_barang");
            $data['list']=$this->m_barang->list_barang();
            $this->load->view("v_barang",$data);

        }
    }
?>