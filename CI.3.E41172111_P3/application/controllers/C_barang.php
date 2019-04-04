<?php
    class C_barang extends CI_controller
    {
        function index()
        {
            $data['nama']="Ini adalah judul";
            $this->load->model("m_barang");

            $data['item']=$this->m_barang->list_barang();
            $this->load->view("v_barang",$data);
        }

        function edit()
        {
            echo "edit";
        }
    }
?>