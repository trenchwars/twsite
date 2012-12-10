<?php	
	class Admin extends TW_Controller {
		public function __construct() {
			parent::__construct();
			
			// yeah lets just hide all this admin stuff... 
			if(!$this->player_security->hasAccess('WebAdmin')) show_404();

            $this->breadcrumb = array(
                array('url' => 'admin/', 'name' => 'Admin')
            );
		}

		public function index() {
			$this->load->view('include/header');
			$this->load->view('include/breadcrumb');
			$this->load->view('admin_index');
			$this->load->view('include/footer');
		}
	}
