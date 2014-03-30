<?php   
    class Admin_metrics extends TW_Controller {
        public function __construct() {
            parent::__construct();
            
            // yeah lets just hide all this admin stuff... 
            if(!$this->player_security->hasAccess('WebAdmin')) show_404();

            $this->breadcrumb = array(
                array('url' => 'admin/',         'name' => 'Admin'),
                array('url' => 'admin_metrics/', 'name' => 'System Metrics')
            );
        }

        public function index() {
            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_metrics_index');
            $this->load->view('include/footer');
        }

        public function help() {
            $this->breadcrumb[] = array('url' => 'admin_metrics/help/', 'name' => 'Help');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_metrics_help');
            $this->load->view('include/footer');
        }

        public function hosting() {
            $this->breadcrumb[] = array('url' => 'admin_metrics/hosting/', 'name' => 'Hosting');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_metrics_hosting');
            $this->load->view('include/footer');
        }

        public function server() {
            $this->breadcrumb[] = array('url' => 'admin_metrics/server/', 'name' => 'Server');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_metrics_server');
            $this->load->view('include/footer');
        }

        public function bot() {
            $this->breadcrumb[] = array('url' => 'admin_metrics/bot/', 'name' => 'Bot');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_metrics_bot');
            $this->load->view('include/footer');
        }

        public function new_player() {
            $this->breadcrumb[] = array('url' => 'admin_metrics/new_player/', 'name' => 'New Player');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_metrics_new_player');
            $this->load->view('include/footer');
        }

        public function advertising() {
            $this->breadcrumb[] = array('url' => 'admin_metrics/advertising/', 'name' => 'Advertising');

            $this->load->view('include/header');
            $this->load->view('include/breadcrumb');
            $this->load->view('admin_metrics_advertising');
            $this->load->view('include/footer');
        }

    }
