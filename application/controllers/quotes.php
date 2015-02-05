<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Model {

	public function index()
	{
		$this->load->model('Quote');
		$quotes['favorites'] = $this->Quote->get_all_favorites($this->session->userdata['record']['id']);
		$quotes['others'] = $this->Quote->get_others-($this->session->userdata['record']['id']);
		$this->load->view('Main');   
	}
	public function get_all_quotes()
	{

	}

	public function get_others()
	{

	}

	public function add_quote()
	{
		$this->load->model('Mains');
		$postquote=$this->input->post();
		$this->Mains->add_quote($postquote);
		redirect('/Quotes/');
		
	}

	public function add_to_favorites()
	{
		
	}

	public function remove_from_favorites()
	{

	}


}
