<?phpd defined('BASEPATH') OR exit('No di rect script access allowed');

	class c_item extends CI_Controller {

		public function index()
		{
			$this->load->model('m_item');
			$data['show']=$this->m_item->show();
			$this->load->view("../../../table", $data);
		}
	}

?>