<?php

class Blog extends Controller {

	function Blog()
	{
		parent::Controller();
		$data['sitetitle'] = 'Blog';
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->scaffolding('entries');
		$this->load->vars($data);
	}
	
	function index()
	{
		$data['sitetitle'] = 'Welcome to the Test Blog';
		$data['query'] = $this->db->get('entries');
		
		$this->load->view('header', $data);
		$this->load->view('menu');
		
		$this->load->view('index');
		
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
	
	function entry() 
	{
		$this->load->model('blogen');
		$data['rows'] = $this->blogen->getEntry();
		
		$this->db->where('entry_id', $this->uri->segment(3));
		$data['query'] = $this->db->get('comments');
		
		
		$this->load->vars($data);
		
		$this->load->view('header');
		$this->load->view('menu');
		
		$this->load->view('entry', $data);
		
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
	
	function comment_insert() 
	{
		$this->db->insert('comments', $_POST);
		redirect('blog/entry/'.$_POST['entry_id']);
	}
		
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */