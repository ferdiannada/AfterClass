<?php defined('BASEPATH') OR exit('No di rect script access allowed');

	class m_item extends CI_Model {

	  /*menampilkan data dari database*/
	  public function show() 
	  {
	    return $this->db->get('item');
	  }
	}
