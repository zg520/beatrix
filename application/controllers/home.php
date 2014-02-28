<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['view'] = 'home';
		$this->load->vars($data);
		$this->load->view('main_layout');
	}
}