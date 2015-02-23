<?php 
	class tesController extends CI_Controller
	{
		public function index()
		{
			$this->load->model('tesModel');
			$data['query']= $this->tesModel->getDatabase();
			$this->load->view('tesViews',$data);
		}
		public function getAll()
		{
			$this->load->model('tesModel');

			$data['query']= $this->tesModel->getDatabase();

			$this->load->view('tesViews',$data);
		}	
	}

	
?>
