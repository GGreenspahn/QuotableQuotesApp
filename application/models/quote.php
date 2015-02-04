public function index()
	{
		$this->load->view('welcome_message');
	}

	public function add_quote()
	{
		$query = "INSERT INTO quotes (speaker, full_quote, created_at, updated_at, posted_by) VALUES (?, ?, ?, ?, ?)";
		$values = array($this->input->post('speaker'), $this->input->post('full_quote'), date('Y-m-d, H:i:s'), date('Y-m-d, H:i:s'), $this->input->post('posted_by'));
		return $this->db->query($query, $values);
	}

	public function get_all_quotes()
	{
		// get all quotes that are not favorites
		// return $this->db_query("SELECT * FROM quotes WHERE id NOT IN (SELECT quote_id FROM favorites WHERE id = {$this->session->userdata('id')}")

	}

	public function add_to_favorites()
	{
		
	}