<?php	
	class Admin_staff extends TW_Controller {
		public function __construct() {
			parent::__construct();
			
			// yeah lets just hide all this admin stuff... 
			if(!$this->player_security->hasAccess('WebAdmin')) show_404();
		}

		public function index() {
			$this->load->view('include/header');
			$this->load->view('admin_staff_index');
			$this->load->view('include/footer');
		}
	}
