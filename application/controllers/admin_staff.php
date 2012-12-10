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

		public function management() {
			$this->load->view('include/header');
			$this->load->view('admin_staff_management');
			$this->load->view('include/footer');
		}

		public function training() {
			$this->load->view('include/header');
			$this->load->view('admin_staff_training');
			$this->load->view('include/footer');
		}

		public function resources() {
			$this->load->view('include/header');
			$this->load->view('admin_staff_resources');
			$this->load->view('include/footer');
		}
	}
