<?php
	class Admin_cms extends TW_Controller {
		public function __construct() {
			parent::__construct();
            if(!$this->player_security->hasAccess('WebAdmin')) show_404();

            $this->breadcrumb = array(
                array('url' => 'admin/',     'name' => 'Admin'),
                array('url' => 'admin_cms/', 'name' => 'CMS')
            );
		}

		public function index() {
			$this->load->model('cms_model');
			
			$items = $this->cms_model->getList();

			$this->load->view('include/header');
			$this->load->view('include/breadcrumb');
			$this->load->view('admin_cms_index', array('items' => $items));
			$this->load->view('include/footer');
		}

		public function edit($item) {
			$this->load->model('cms_model');

			$this->breadcrumb[] = array('url' => 'admin_cms/edit/', 'name' => 'Edit '.$item);

			if($this->input->post('contents')) $this->cms_model->set($item, $this->input->post('contents'));

			$contents = $this->cms_model->get($item);

			$this->load->view('include/header');
			$this->load->view('include/breadcrumb');
			$this->load->view('admin_cms_edit', array('item' => $item, 'contents' => $contents));
			$this->load->view('include/footer');
		}

		public function view($item) {
			$this->breadcrumb[] = array('url' => 'admin_cms/view/', 'name' => 'View'.$item);

			$this->load->view('include/header');
			$this->load->view('include/breadcrumb');
			$this->load->view('admin_cms_view');
			$this->load->view('include/footer');
		}
	}
