<?php   
    class Admin_staff extends TW_Controller {
        public function __construct() {
            parent::__construct();
            
            // yeah lets just hide all this admin stuff... 
            if(!$this->player_security->hasAccess('WebAdmin')) show_404();

            $this->breadcrumb = array(
                array('url' => 'admin/',       'name' => 'Admin'),
                array('url' => 'admin_staff/', 'name' => 'Staff')
            );
        }

        public function index() {
            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_staff_index');
            $this->load->view('include/footer');
        }

        public function management() {
            $this->breadcrumb[] = array('url' => 'admin_staff/management/', 'name' => 'Management');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_staff_management');
            $this->load->view('include/footer');
        }

        public function training() {
            $this->breadcrumb[] = array('url' => 'admin_staff/training/', 'name' => 'Training');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_staff_training');
            $this->load->view('include/footer');
        }

        public function resources() {
            $this->breadcrumb[] = array('url' => 'admin_staff/resources/', 'name' => 'Resources');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_staff_resources');
            $this->load->view('include/footer');
        }
    }
