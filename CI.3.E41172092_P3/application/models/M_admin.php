<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */