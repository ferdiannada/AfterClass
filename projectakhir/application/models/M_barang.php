<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{
    public function getAllBarang()
    {
        $this->db->select('barang.*, jenis.id AS idjenis, jenis.jenis'); // membuat alias untuk id dari tabel jenis
          $this->db->join('jenis', 'barang.jenis = jenis.jenis'); // perintah join tabel barang dan jenis untuk mendapatkan jenis barang
          $this->db->from('barang'); // data utama di ambil dari tabel barang
          return $this->db->get()->result();
    }
    
    public function limitBarang($limit, $start, $keyword = null) // making pagination query
    {
        $this->db->select('barang.*, jenis.id AS idjenis, jenis.jenis'); // membuat alias untuk id dari tabel jenis
          $this->db->join('jenis', 'barang.jenis = jenis.jenis'); // perintah join tabel barang dan jenis untuk mendapatkan jenis barang
        //   $this->db->from('barang'); // data utama di ambil dari tabel barang

        if ($keyword) {
            $this->db->like('nama_barang', $keyword);
        }
        return $this->db->get('barang', $limit, $start)->result();
    }

    public function countBarang()
    {
        return $this->db->get('barang')->num_rows();
    }


    public function getAllJenis()
    {
        return $this->db->get('jenis')->result_array();
    }


    public function tambahBarang()
    {
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'gambar' => $this->_uploadImage(), // pemanggilan method upload file
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))
        ];

        $this->db->insert('barang', $data); // query untuk insert data ke tabel barang
    }


    public function tambahJenis()
    {
        $data = [
            'id' => htmlspecialchars($this->input->post('id', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
        ];

        $this->db->insert('jenis', $data); // query untuk insert data ke tabel barang
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function editBarang()
    {
        $data = [
            'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'gambar' => $this->_uploadImage(),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('barang', $data);
    }

    public function kode()
    {
        $this->db->select('RIGHT(barang.id,2) as id', false);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('barang');  //cek dulu apakah ada sudah ada kode di tabel.
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia
            $data = $query->row();
            $kode = intval($data->id) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl=date('dmY');
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodetampil = "BRG".$tgl.$batas;  //format kode
        return $kodetampil;
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }

    public function hapusDataJenis($jenis)
    {
        $this->db->where('jenis', $jenis);
        $this->db->delete('jenis');
    }

    private function _uploadImage()
    {
        $config = [ // set image properties
                'upload_path' => './upload/product', // lokasi upload file
                'allowed_types' => 'gif|jpg|jpeg|png', // tipe gambar yang di ijinkan u/ upload
                'overwrite' 	=> true, // menimpa data ketika update
                'max_size' => 2024 // ukuran maksimal gambar yang di perbolehkan upload (2Mb)
            ];
        $this->load->library('upload', $config); // load library untuk upload file dan syarat untuk upload file

        if ($this->upload->do_upload('gambar')) { // cek ketika gambar di upload dari input file 'gambar'
         return $this->upload->data('file_name'); // melakukan proses upload data dan mengambil nilai nama dari properties gambar
        }
        return "default.jpg"; // mengambil nilai default.jpg untuk di simpan ke db ketika gagal upload / user tdk menyertakan gambar
    }

    public function select_jenis($jenis)
    {
        $this->db->where('jenis', $jenis);
        return $this->db->get('barang')->result();
    }

    public function get_produkid($id)
    {
        $this->db->select('barang.*,jenis');
        $this->db->from('barang');
        $this->db->join('jenis', 'jenis=jenis.jenis', 'left');
        $this->db->where('id', $id);
        return $this->db->get();
    }
    
    public function tambah_order($data)
    {
        $this->db->insert('tbl_order', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : false;
    }
    
    public function tambah_detail_order($data)
    {
        $this->db->insert('tbl_detail_order', $data);
    }
}

/* End of file M_barang.php */
/* Location: ./application/models/M_barang.php */
