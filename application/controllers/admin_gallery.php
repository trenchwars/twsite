<?php   
    class Admin_gallery extends TW_Controller {
        public function __construct() {
            parent::__construct();
            
            // yeah lets just hide all this admin stuff... 
            if(!$this->player_security->hasAccess('WebAdmin')) show_404();

            $this->breadcrumb = array(
                array('url' => 'admin/',         'name' => 'Admin'),
                array('url' => 'admin_gallery/', 'name' => 'Gallery')
            );
        }

        public function index() {
            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_gallery_index');
            $this->load->view('include/footer');
        }
    }
