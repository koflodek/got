<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$query = $this->db->query("SELECT * FROM houses");
		$data['content'] = 'map';
		$style = array();
		$style[] = load_css('basic.css');
		$style[] = load_css('jquery-jvectormap-1.2.2.css');
		$style[] = load_js('jQuery2.0.2.js');
		$style[] = load_js('jquery-jvectormap-1.2.2.min.js');
		$style[] = load_js('map.js');
		$data['style'] = $style;
		$this->load->view('template/template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */