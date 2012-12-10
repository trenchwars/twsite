<?php	
	class Admin_medals extends TW_Controller {
		public function __construct() {
			parent::__construct();
			
			// yeah lets just hide all this admin stuff... 
			if(!$this->player_security->hasAccess('WebAdmin')) show_404();
		}

		public function index() {
			$this->load->view('include/header');
			$this->load->view('admin_medals_index');
			$this->load->view('include/footer');
		}

		public function manage() {
			$this->load->view('include/header');
			$this->load->view('admin_medals_manage');
			$this->load->view('include/footer');
		}

		public function player() {
			$this->load->view('include/header');
			$this->load->view('admin_medals_player');
			$this->load->view('include/footer');
		}
	}
