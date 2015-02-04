public function get_all_quotes()
	{

	}

	public function get_all_favorites()
	{

	}

	public function add_quote()
	{
		$this->load->model('Mains');
		$postquote=$this->input->post();
		$this->Mains->add_quote($postquote);
		redirect('/Main/quotes');
		
	}

	public function add_to_favorites()
	{
		
	}

	public function remove_from_favorites()
	{

	}


	public function logout()
	{
		
		$this->session->set_flashdata('message', "Have a lovely day!");
		redirect('/main/index');
	}

