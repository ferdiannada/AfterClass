<?php
	 class Barang extends CI_Controller{

	 //merupakan sebuah konstruktor. Method ini yang akan dieksekusi pertama kali saat Controller diakses.
	 function __construct()
	 {
	 	parent ::__construct();
	 	
	 	$this->load->model("M_barang");
	 	//load class form validasi
	 	$this->load->library("form_validation");
	 }

	function index()
	{		
			//load dari model 	 	
	 	 	$data['list']=$this->M_barang->list_barang();
	 	 	
	 		$this->load->view('v_barang',$data); //merujuk ke view
	 	//	$data['judul']="ini adalah barang";
	}
	 
	 function add(){
	 		$Barang= $this ->M_barang;
	 		$this->load->view('v_tambah');
	 
	 		$validasi=$this->form_validation;
	 		$validasi->set_rules($Barang->rules());

	 		if ($validasi ->run()) {
				$Barang->save(); 			
	 		redirect(site_url('barang'));
	 		}
	}

	public function update($id=null)
    {
               
        $Barang = $this->M_barang;
        $validation = $this->form_validation;
        $validation->set_rules($Barang->rules());

        $data["barang"] = $Barang->getById($id);

      	$this->load->view("v_barangupdate",$data);

      if ($validation ->run()) {
			$Barang->update(); 			
	 		redirect(site_url('barang'));
	 		}
        
        
    }

    public function delete($id=null)
    {
             
        if ($this->M_barang->delete($id)) {
            redirect(site_url('barang'));
        }
    }
	 
}
?>