<?php
class M_barang extends CI_Model{
	//buat fungsi utk ambil data
	private $_table="barang";

	public $kdbarang;
	public $nama;
	public $deskripsi;
	public $stokbarang;
	public $hargabarang;

	public function rules()
	{
		return [
			['field' => 'nama',
			 'label' => 'Nama Barang',
			 'rules' => 'required'],

			['field' => 'harga',
			 'label' => 'Harga Barang',
			 'rules' => 'numeric'],

			 ['field' => 'deskripsi',
			 'label' => 'Deskripsi Barang',
			 'rules' => 'required'],

			 ['field' => 'stokbarang',
			 'label' => 'Stok Barang',
			 'rules' => 'numeric'],
		];
	}


	public function list_barang(){
		/* mysqli_query (select * from)
		Menampilkan data barang
		*/
		return $this->db->get($this->_table)->result();
	}

	public function getById($id){
	         return $this->db->get_where($this->_table, ["kdbarang" => $id])->row();
    }

	public function save(){
		$post = $this -> input -> post();
		//$this->kdbarang = uniqid();
		$this->kdbarang = $post["kdbarang"];
		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
		$this->stokbarang = $post["stokbarang"];
		$this->hargabarang = $post["hargabarang"];

		//mysqli_query insert
		$this->db->insert($this->_table,$this);

	}


	//Melakukan update data mahasiswa

public function update()
    {
        $post = $this->input->post();
        $this->kdbarang = $post["kdbarang"];
        $this->nama = $post["nama"];
        $this->deskripsi = $post["deskripsi"];
        $this->stokbarang = $post["stokbarang"];
        $this->hargabarang = $post["hargabarang"];
        
        $this->db->update($this->_table, $this, array('kdbarang' => $post['kdbarang']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kdbarang" => $id));
    }
}
?>