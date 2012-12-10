<?php	
	class Admin_metrics extends TW_Controller {
		public function __construct() {
			parent::__construct();
			
			// yeah lets just hide all this admin stuff... 
			if(!$this->player_security->hasAccess('WebAdmin')) show_404();
		}

		public function index() {
			$this->load->view('include/header');
			$this->load->view('admin_metrics_index');
			$this->load->view('include/footer');
		}

		public function help() {
			$this->load->view('include/header');
			$this->load->view('admin_metrics_help');
			$this->load->view('include/footer');
		}

		public function hosting() {
			$this->load->view('include/header');
			$this->load->view('admin_metrics_hosting');
			$this->load->view('include/footer');
		}

		public function server() {
			$this->load->view('include/header');
			$this->load->view('admin_metrics_server');
			$this->load->view('include/footer');
		}

		public function bot() {
			$this->load->view('include/header');
			$this->load->view('admin_metrics_bot');
			$this->load->view('include/footer');
		}

		public function new_player() {
			$this->load->view('include/header');
			$this->load->view('admin_metrics_new_player');
			$this->load->view('include/footer');
		}

		public function advertising() {
			$this->load->view('include/header');
			$this->load->view('admin_metrics_advertising');
			$this->load->view('include/footer');
		}

	}
